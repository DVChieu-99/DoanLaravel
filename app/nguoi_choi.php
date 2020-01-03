<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Tymon\JWTAuth\Contracts\JWtSubject;
class nguoi_choi extends Authenticatable implements JWtSubject
{
     use SoftDeletes;
     protected $table = 'nguoi_choi';
     protected $hidden = ['mat_khau'];
    public function getPasswordAttribute()
      {
      return $this->mat_khau;
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
