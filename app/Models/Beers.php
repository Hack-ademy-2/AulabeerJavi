<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beers extends Model
{
    use HasFactory;

    protected $fillable = [
        'cerveza',
        'tipo',
        'image',
        'category'
    ];
}
