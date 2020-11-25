<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResturantMenuModel extends Model
{
    public $table = 'resturant_menu';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = false;
}
