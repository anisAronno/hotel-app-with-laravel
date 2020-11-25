<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomFacilityModel extends Model
{ public $table = 'roomfacilities';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public  $timestamps = false;
}
