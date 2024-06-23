<?php

namespace App\Application\Modules\Banks\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BankResource extends JsonResource
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
            "bic" => $this->bic,
            "name" => $this->name,
            "corr_bank_account" => $this->corr_bank_account,
            "city" => $this->city,
            "address" => $this->address,
            "phones" => $this->phones,
        ];
    }
}