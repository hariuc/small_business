<?php

namespace App\SmallBusinessApp\Modules\Catalogs\Currencies\Services;

use App\SmallBusinessApp\Modules\Catalogs\Banks\Actions\BankAction;
use App\SmallBusinessApp\Modules\Catalogs\Banks\Models\BankModel;
use App\SmallBusinessApp\Modules\Catalogs\Currencies\Repositories\CurrencyRepository;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CurrencyService
{

    public function __construct(readonly private CurrencyRepository $repository)
    {
    }

    public function index(Request $request): Collection
    {
        return $this->repository->index($request);
    }


    /**
     * @return Model
     */
    public function show(string $id): Model
    {
        return $this->repository->show($id);
    }

    /**
     * @param array $requestParams
     * @return array
     */
    public function store(array $requestParams): Model
    {

        return BankAction::storeOrUpdate($requestParams);
    }

    public function update(array $requestParams, string $id): Model
    {
        return BankAction::storeOrUpdate($requestParams, $id);
    }

    public function delete(string $id): bool
    {
        try {
            DB::beginTransaction();
            $element = BankModel::query()->findOrFail($id);
            $result = $element->delete();
            if ($result === false || $result === null) {
                throw new Exception();
            } else {
                DB::commit();
                return true;
            }
        } catch (Exception $e) {
            DB::rollBack();
            $this->error($e->getMessage());
            //TODO: Обработать ошибку
            throw new HttpResponseException(
                response()->json(["data" => $e->getMessage()])
            );
        }
    }

}
