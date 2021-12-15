<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListJobgroup extends Model
{
    //
    
    protected $fillable = ['group_id','lisjob_id'];
    protected $table = "list-job-group";
    
}
