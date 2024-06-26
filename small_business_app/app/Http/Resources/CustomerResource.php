<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            "code" => $this->code,
            "name" => $this->name,
            "fullName" => $this->full_name,
            "customerType" => $this->customer_type,
            "fiscslCode" => $this->fiscal_code,
            "vatCode" => $this->vat_code,
        ];
    }
}
