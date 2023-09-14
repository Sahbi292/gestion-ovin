<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VaccinResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return
        [ 'periode' =>$this->periode, 'nom_vaccin' =>$this->nom_vaccin, 'note' =>$this->note,  ];
    }
}
