<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Customer  extends Authenticatable
{

    use HasApiTokens, Notifiable;


  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

      protected $fillable = [
        'username',
        'email',
        'number_phone',
        'password',
        'refferal_code',
        'permission',
        'is_active',
        'jobs_id',
        'is_group'
  ];
  
  protected $hidden = [
       'password', 'remember_token'
  ];
  

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

  public function LiveInArea()
  {
      return $this->hasMany(LiveInArea::class, 'id', 'live_in_area');
  }

  public function getJWTIdentifier()
  {
      return $this->getKey();
  }
  public function getJWTCustomClaims()
  {
      return [];
  }
  
}
