<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class doctors extends Model
{
     protected $gaurd = "admin";
     protected $fillable = [
        'name', 'designation','unit','visiting_time',
    ];
    
}
