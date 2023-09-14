<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sujet;

class Race extends Model
{
    use HasFactory;
    protected $fillable = [ 'nom_race' ];

    
    
}
