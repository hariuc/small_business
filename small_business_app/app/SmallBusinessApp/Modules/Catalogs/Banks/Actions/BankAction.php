<?php

namespace App\SmallBusinessApp\Modules\Catalogs\Banks\Actions;


use App\SmallBusinessApp\Modules\Catalogs\Banks\Models\BankModel;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BankAction
{

    /**
     * @param Exception $e
     * @return JsonResponse
     */
    public static function responseWithException(Exception $e): JsonResponse
    {
        return response()->json(["code" => $e->getCode(), "message" => $e->getMessage()], 500);
    }


    public static function storeOrUpdate(array $requestParams, string $id = ""): Model
    {
        try {
            DB::beginTransaction();
            if ($id !== "") {
                $element = BankModel::query()->findOrFail($id);
            } else {
                $element = app(BankModel::class);
            }

            $element->bic = $requestParams["bic"];
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
