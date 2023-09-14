<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AlimentationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return
        [ 'tranche_age' =>$this->tranche_age, 'categorie' =>$this->categorie, 'composition' =>$this->composition,  ];
    }
}
