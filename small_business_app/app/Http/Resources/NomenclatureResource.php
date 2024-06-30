<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NomenclatureResource extends JsonResource
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
            "fullName" => $this->full_name,
            'vendorCode' => $this->vendor_code,
            "nomenclatureType" => $this->nomenclature_type,
            "category" => new CategoryResource($this->category),
            "unit" => new UnitClassifierResource($this->unit),
        ];
    }
}
