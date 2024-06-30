<?php

namespace App\SmallBusinessApp\Modules\Catalogs\Banks\Repositories;
use App\SmallBusinessApp\Core\Interfaces\RepositoryInterface;
use App\SmallBusinessApp\Core\Traits\Logger;
use App\SmallBusinessApp\Modules\Catalogs\Banks\Models\BankModel;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use SimpleXMLElement;
use Exception;

class BankRepository implements RepositoryInterface
{

    use Logger;

    /**
     * @return Collection
     */
    public function index(Request $request): Collection
    {
        $query = BankModel::query();
        return $query->get();
    }


    /**
     * @param string $id
     * @return Model
     */
    public function show(string $id): Model
    {
        try{
            $queryBuilder = BankModel::query();
            $result = $queryBuilder->findOrFail($id);

            return $result;
        }catch (ModelNotFoundException $e){
            throw new ModelNotFoundException();
        }

    }


    /**
     * @return void
     */
    public function loadBanksFromBNM(): void
    {
        $url = "https://www.bnm.md/ro/licensed_banks_xml";
        $response = Http::get($url);
        if ($response->ok()) {
            print_r($response->body());
            $xmlData = simplexml_load_string($response->body());
            $elements = $xmlData->xpath("//UpdateInfo | //Participants");

            foreach ($elements as $element) {
                if ($element->getName() === "Participants") {
                    $arr = [];
                    foreach ($element->Participant as $participant) {
                        $bic = (string)$participant["BIC"];
                        $name = (string)$participant["Name"];
                        $shortName = (string)$participant["ShortName"];
                        $countryCode = (string)$participant["Country"];
                        $arr[] = [
                            "bic" => $bic,
                            "name" => $name,
                            "shortName" => $shortName,
                            "countryCode" => $countryCode,

                        ];
                    }

                    foreach ($arr as $item) {
                        try {
                            $bank = new BankModel();
                            $bank->bic = $item["bic"];
                            $bank->name = $item["name"];
                            $bank->corr_bank_account = $item["shortName"];
                            $bank->save();
                        } catch (Exception $e) {
                            $this->error("[ERROR]: " . __METHOD__ . " " . $e->getMessage());
                        }
                    }
                }
            }
        } else {
            $this->error("[ERROR]: " . __METHOD__ . " " . (string)$response->status());
        }
    }
}
