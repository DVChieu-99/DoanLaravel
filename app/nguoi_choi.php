<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class nguoi_choi extends Model
{
     use SoftDeletes;
    protected $table = 'nguoi_choi';
}
