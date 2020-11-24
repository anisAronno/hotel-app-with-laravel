<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomImageModel extends Model
{
    public $table = 'roomImages';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public  $timestamps = false;
}
