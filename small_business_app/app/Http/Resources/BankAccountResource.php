<?php

namespace App\Http\Resources;

use App\Application\Modules\Banks\Resources\BankResource;
use App\Application\Modules\Currencies\Resources\CurrencyResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BankAccountResource extends JsonResource
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
            "bank" => new BankResource($this->bank),
            "customer" => new CustomerResource($this->customer),
            "currency" => new CurrencyResource($this->currency),
        ];
    }
}
