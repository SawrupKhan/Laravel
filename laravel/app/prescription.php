<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class prescription extends Model
{
   
     protected $gaurd = "admin";
     protected $fillable = [
        'code', 'roll','problem','name','details',
        ];
}
