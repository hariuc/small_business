<?php

namespace App\SmallBusinessApp\Core\Halpers;

use Illuminate\Http\JsonResponse;
use Exception;

class ExceptionHelper
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
