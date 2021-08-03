<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    protected $fillable = [
        'bg',
        'img',
        'title',
        'subtitle',
        'description',
        'price',
        'status',
        'length',
        'height',
        'width',
        'weight',
    ];
}
