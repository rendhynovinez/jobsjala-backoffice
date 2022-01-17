<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listJob extends Model
{
    protected $table = 'list-job';

    protected $fillable = [
        'itemCompany',
        'itemSalary',
        'itemTitle',
        'itemPostDescription',
        'ItemDetailDescription',
        'itemAdress',
        'itemStatus',
        'itemImg',
        'ItemCategory',
        'ItemRequirements',
        'female_cnt',
        'male_cnt',
        'standard_cnt',
        'apply_female',
        'apply_male',
        'apply_standard',
        'gender_status'
    ];
}
