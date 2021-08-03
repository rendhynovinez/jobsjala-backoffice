<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSpecialist extends Model
{
    //
    protected $table = 'job_specialist';

    protected $fillable = [
        'name'
    ];
}
