<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class linh_vuc extends Model
{
    use SoftDeletes;
    protected $table = 'linh_vuc';
}
