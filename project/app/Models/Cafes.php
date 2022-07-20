<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafes extends Model
{
    protected $fillable = [
        'name',
        'location',
        'description',
        'img'
    ];

    use HasFactory;
}
