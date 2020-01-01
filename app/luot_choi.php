<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class luot_choi extends Model
{
    protected $table = 'luot_choi';
    public function luotchoi(){
      return $this->belongsTo('App\nguoi_choi');
    }
}
