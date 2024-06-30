<?php

namespace App\SmallBusinessApp\Modules\Catalogs\Currencies\Controllers;

use App\SmallBusinessApp\Core\Halpers\ExceptionHelper;
use App\SmallBusinessApp\Modules\Catalogs\Banks\Actions\BankAction;
use App\SmallBusinessApp\Modules\Catalogs\Banks\Resources\BankResource;
use App\SmallBusinessApp\Modules\Catalogs\Currencies\Resources\CurrencyResource;
use App\SmallBusinessApp\Modules\Catalogs\Currencies\Services\CurrencyService;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CurrencyController extends Controller
{
    public function __construct(private CurrencyService $currencyService)
    {
    }


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $result = CurrencyResource::collection($this->currencyService->index($request));
            return $result;
        } catch (Exception $e) {
            return ExceptionHelper::responseWithException($e);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $response = $this->currencyService->store($request->all());
        return new BankResource($response);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse|JsonResource
    {
        try {
            $response = $this->currencyService->show($id);
            return new CurrencyResource($response);
        } catch (Exception|ModelNotFoundException $e) {
            return ExceptionHelper::responseWithException($e);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $response = $this->currencyService->update($request->all(), $id);
        return new JsonResponse($response);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->currencyService->delete($id);
        return response()->json(["data" => ["status" => "OK"]]);
    }
}
