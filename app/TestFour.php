<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestFour extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='test_fours';
}
        