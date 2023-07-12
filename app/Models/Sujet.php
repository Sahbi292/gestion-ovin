<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sujet extends Model
{
    use HasFactory;

    protected $fillable = ['identifiant', 'genre', 'date_naissance', 'poids', 'note', 'id_parent' ];

    
}
