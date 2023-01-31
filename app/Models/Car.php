<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ["id", "image", "name", "modele_id", "marque_id", "prix", "vitesse", "description", "etat",];

    public function modele(){
        return $this->belongsTo(Modele::class);
    }

    public function marque(){
        return $this->belongsTo(Marque::class);
    }
    public function emprunts(){
        return $this->hasMany(Emprunt::class);
    }
}
