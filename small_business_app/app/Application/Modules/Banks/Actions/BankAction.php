<?php

namespace App\Application\Modules\Banks\Actions;

use Exception;
use Illuminate\Http\JsonResponse;

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
}
