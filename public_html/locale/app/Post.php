<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public $table = 'Posts';
    public $timestamps = false;
    public $primaryKey = 'id';
}
