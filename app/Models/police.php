<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class police extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'nom',
        'prenom',
        'adresse',
        'sexe',
        'telephone',
        'matricule',
        'grade',
        'affectation',
        'email',
        'motdepasse',
    ];

    public function police()
    {
        return $this->belongsTo(police::class, 'userId');
    }
}
