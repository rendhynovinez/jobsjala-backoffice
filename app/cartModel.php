<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cartModel extends Model
{
    //
    protected $table = "order_cart";

    protected $fillable = [
        'order_numb',
        'id_product',
        'qty',
        'img',
        'height',
        'length',
        'price',
        'subtitle',
        'title',
        'weight',
        'width',
        'uid',
        'status_order',
        'store_name',
        'code_key',
        'percent',
        'cus_name'
    ];

    public function GetUser()
    {
         return $this->belongsTo('App\Customer', 'uid', 'id');
    }


}
