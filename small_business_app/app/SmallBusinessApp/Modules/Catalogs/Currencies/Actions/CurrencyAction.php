<?php

namespace App\SmallBusinessApp\Modules\Catalogs\Currencies\Actions;

use App\SmallBusinessApp\Modules\Catalogs\Banks\Models\BankModel;
use App\SmallBusinessApp\Modules\Catalogs\Currencies\Models\CurrencyModel;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CurrencyAction
{
    public static function storeOrUpdate(array $requestParams, string $id = ""): Model
    {
        try {
            DB::beginTransaction();
            if ($id !== "") {
                $element = CurrencyModel::query()->findOrFail($id);
            } else {
                $element = app(CurrencyModel::class);
            }

            $element->name = $requestParams["name"];
            $element->corr_bank_account = $requestParams["corr_bank_account"];
            $element->address = $requestParams["address"];
            $element->phones = $requestParams["phones"];
            $element->save();
            DB::commit();
            return $element;
        } catch (Exception|ModelNotFoundException $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            //TODO: Обработать ошибку
            throw new HttpResponseException(
                response()->json(["data" => $e->getMessage()])
            );
        }
    }
}
