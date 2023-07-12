<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SujetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray(Request $request)
    {
        return
        [ 'identifiant' =>$this->identifiant, 'genre' => $this->genre, 'date-naissance' => $this->date_naissance, 'poids' =>$this->poids, 'note'=>$this->note, 'id_parent'=>$this->id_parent,  ];
    }
}
