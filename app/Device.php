<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Device extends Authenticatable
{
     use Notifiable;
 
    protected $table = 'devices';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email', 'password'
    ];
 
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'passcode', 'remember_token',
    ];
 
 
    public function getAuthPassword()
    {
      return $this->password;
    }
}
