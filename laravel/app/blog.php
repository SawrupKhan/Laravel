<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
     protected $gaurd = "admin";
    protected $table = 'blog';
}
