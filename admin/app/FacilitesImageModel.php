<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacilitesImageModel extends Model
{
    public $table = 'facilities_image';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public  $timestamps = false;
}
