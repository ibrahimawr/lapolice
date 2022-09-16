<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class civil extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'nom',
        'prenom',
        'adresse',
        'sexe',
        'telephone',
        'situation',
        'profession',
        'email',
        'motdepasse',
    ];

    public function civil()
    {
        return $this->belongsTo(civl::class, 'userId');
    }
}
