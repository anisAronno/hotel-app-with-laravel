<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResturantModel extends Model
{
    public $table = 'resturant';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = false;
}
