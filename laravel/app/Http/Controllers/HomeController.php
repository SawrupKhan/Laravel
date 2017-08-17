<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\read_blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function show(){

    $users = DB::table('') ->get();
    return view('show',  compact('users'));

}

  public function read_blog()
    {
        //$read_blog=new read_blog;
$read_blog=DB::table('blog')->get();
return view ('read_blog', compact('read_blog'));

    }
   
       public function show_doctors(){

    $doctors =DB::table('doctors') ->get();
    return view('show_doctors',  compact('doctors'));
    }



}
