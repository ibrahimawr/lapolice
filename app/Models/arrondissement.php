<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arrondissement extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'nom',
        'prenom',
        'adresse',
        'sexe',
        'telephone',
        'region',
        'numero_arrondissement',
        'email',
        'motdepasse',
    ];

    public function arrondissement()
    {
        return $this->belongsTo(arrondissement::class, 'userId');
    }
}
