<?php

namespace App\Application\Modules\Banks\Controllers;

use App\Application\Core\Halpers\ExceptionHelper;
use App\Application\Core\Traits\Logger;
use App\Application\Modules\Banks\Actions\BankAction;
use App\Application\Modules\Banks\Requests\BankRequest;
use App\Application\Modules\Banks\Resources\BankResource;
use App\Application\Modules\Banks\Services\BankService;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Http\Resources\Json\JsonResource;


class BankController extends Controller
{

    use Logger;

    public function __construct(private readonly BankService $service)
    {
    }


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse|JsonResource
    {
        try {
            $result = BankResource::collection($this->service->index($request));
            return $result;
        } catch (Exception $e) {
            return ExceptionHelper::responseWithException($e);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(BankRequest $request): JsonResource
    {
        $response = $this->service->store($request->all());
        return new BankResource($response);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse|JsonResource
    {
        try {
            $response = $this->service->show($id);

            return new BankResource($response);
        } catch (Exception|ModelNotFoundException $e) {
            return ExceptionHelper::responseWithException($e);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(BankRequest $request, string $id): JsonResponse
    {
        $response = $this->service->update($request->all(), $id);
        return new JsonResponse($response);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $this->service->delete($id);
        return response()->json(["data" => ["status" => "OK"]]);
    }
}
