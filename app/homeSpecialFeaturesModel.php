<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homeSpecialFeaturesModel extends Model
{
    public $table = 'home_special_feature';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public  $timestamps = false;
}
