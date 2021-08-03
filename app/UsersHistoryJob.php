<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class UsersHistoryJob extends Model
{

    protected $table ='users-history-job';

    protected $fillable = ['user_id','jobs_id','status'];

    public function Customer()
    {
        return $this->hasOne(Customer::class, 'id', 'user_id');
    }

    public function Jobs()
    {
        return $this->hasOne(listJob::class, 'id', 'jobs_id');
    }

}
