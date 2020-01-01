<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class goi_credit extends Model
{
    use SoftDeletes;
    protected $table = 'goi_credit';
    public function nguoimua(){
      return $this->hasMany('App\nguoi_choi');
    }
}
