<?php

namespace App\App\Modules\Banks\Repositories;

use App\App\Core\Interfaces\RepositoryInterface;
use App\App\Modules\Banks\Models\BankModel;
use App\App\Modules\Banks\Resources\BankResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BankRepository implements RepositoryInterface
{

    public function index(Request $request): JsonResource
    {
        return BankResource::collection(BankModel::query()->get());
    }

    public function show($id)
    {
        // TODO: Implement getById() method.
    }
}
