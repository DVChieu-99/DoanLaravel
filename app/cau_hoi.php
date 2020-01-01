<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cau_hoi extends Model
{
    use SoftDeletes;
   protected $table = 'cau_hoi';

   public function linhVuc()
   {
   		return $this->belongsTo('App\LinhVuc');
   }
}
