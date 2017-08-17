<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\read_blog;

class ReadblogController extends Controller
{
    public function read_blog()
    {
    	//$read_blog=new read_blog;
$read_blog=DB::table('blog')->get();

return view ('read_blog', compact('read_blog'));


    }
}
