<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MaladieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return
        [ 'nom_maladie' =>$this->nom_maladie, 'asymptome' =>$this->asymptome, 'nom_traitement' =>$this->nom_traitement,  ];
    }
}
