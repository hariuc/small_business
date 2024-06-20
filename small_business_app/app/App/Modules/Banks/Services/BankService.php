<?php

namespace App\App\Modules\Banks\Services;

use App\App\Modules\Banks\Repositories\BankRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Ramsey\Collection\Collection;

class BankService
{
    public function __construct(private BankRepository $repository)
    {

    }

    public function index(Request $request): JsonResource
    {
        return $this->repository->index($request);
    }


    public function show(string $id): Model
    {
        return $this->repository->show($id);
    }
}
