<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time'; 
    public $table = 'blog';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public  $timestamps = false;
}
