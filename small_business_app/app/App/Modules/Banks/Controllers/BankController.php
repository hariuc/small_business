<?php

namespace App\App\Modules\Banks\Controllers;

use App\App\Core\Traits\Logger;
use App\App\Modules\Banks\Actions\BankAction;
use App\App\Modules\Banks\Resources\BankResource;
use App\App\Modules\Banks\Services\BankService;
use App\Http\Controllers\Controller;
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
    public function index(Request $request): JsonResource|JsonResponse
    {
        try {
            return BankResource::collection($this->service->index($request));
        } catch (Exception $e) {
            return BankAction::responseWithException($e);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
