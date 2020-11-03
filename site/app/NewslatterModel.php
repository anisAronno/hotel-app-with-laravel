<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewslatterModel extends Model
{
    public $table = 'newslatter';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = false;
}
