<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delit extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'type',
        'lieu',
        'ampleur',
    ];
}
