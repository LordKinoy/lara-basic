<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    /** @use HasFactory<\Database\Factories\ProductModelFactory> */
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'image',
        'title',
        'description',
        'price',
        'stock',

    ];
}
