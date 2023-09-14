<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nom_lot' ];

    public function sujet () {
        return $this->hasMany(Sujet::class,'lot_id');
    }
}
