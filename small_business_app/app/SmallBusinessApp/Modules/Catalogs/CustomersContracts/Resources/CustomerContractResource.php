<?php

namespace App\SmallBusinessApp\Modules\Catalogs\CustomersContracts\Resources;


use App\SmallBusinessApp\Modules\Catalogs\Currencies\Resources\CurrencyResource;
use App\SmallBusinessApp\Modules\Catalogs\Customers\Resources\CustomerResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerContractResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "contractDate" => $this->contract_date,
            "customer" => new CustomerResource($this->customer),
            "currency" => new CurrencyResource($this->currency),
        ];
    }
}
