<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perte extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'typepiece',
        'nomperdant',
        'prenomperdant',
        'dateperte',
        'numeroperdant',
        'lieuramassage',
        'nomrerouvant',
        'prenomretrouvant',
        'telephoneretrouvant',
    ];
}
