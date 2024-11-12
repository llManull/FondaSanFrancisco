<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'catalogo';

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'price',
        'image',
    ];
}
