<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacilitiesModel extends Model
{
    public $table = 'facilities';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public  $timestamps = false;
}
