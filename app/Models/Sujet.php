<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sujet extends Model
{
    use HasFactory;
    protected $fillable = ['matricule', 'genre', 'date_naissance','race', 'poids', 'note', 'matricule_parent' ];


    public function lot()
    {
        return $this->belongsTo(Lot::class, 'lot_id');
    }
        
    

}




