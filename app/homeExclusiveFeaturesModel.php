<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homeExclusiveFeaturesModel extends Model
{
    public $table = 'home_exclusive_feature';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public  $timestamps = false;
}
