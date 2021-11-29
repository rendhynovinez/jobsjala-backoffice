<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailUsers extends Model
{

    protected $table =  'detail-users';

    protected $fillable = ['fullname',
        'dateofbirth',
        'gender',
        'phonenumber',
        'etnics',
        'address',
        'LiveInArea',
        'Education',
        'Organization',
        'JobSpecialist',
        // 'file',
        // 'file_name',
        'Skills',
        'customer_id',
        'Group'
    ];
}
