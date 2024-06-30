<?php

namespace App\Http\Resources;

use App\Application\Modules\Currencies\Resources\CurrencyResource;
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
