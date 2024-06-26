<?php

namespace App\Application\Modules\Currencies\Repositories;

use App\Application\Core\Interfaces\RepositoryInterface;
use App\Application\Modules\Currencies\Models\CurrencyModel;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CurrencyRepository implements RepositoryInterface
{

    public function index(Request $request): Collection
    {
        $query = CurrencyModel::query();
        return $query->get();
    }

    public function show(string $id): Model
    {
        try {
            $queryBuilder = CurrencyModel::query();
            $result = $queryBuilder->findOrFail($id);

            return $result;
        } catch (ModelNotFoundException $e) {
            throw new ModelNotFoundException();
        }
    }
}
