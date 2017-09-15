<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    public $table = 'Admin';
    public $timestamps = false;
    public $primaryKey = 'user';
}
