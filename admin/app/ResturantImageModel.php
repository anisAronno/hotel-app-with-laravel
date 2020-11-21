<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResturantImageModel extends Model
{
    public $table = 'resturant_image';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = false;
}
