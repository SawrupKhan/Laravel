<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\doctors;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    public function show(){

    $users = DB::table('users') ->get();
    return view('show',  compact('users'));
  //    return view('show');
}
  public function doctors_form()
    {
        return view('doctors_form');
    }

    public function store(Request $request)
    {
     $doctors = new doctors;
    
     $doctors->name=$request->name;
     $doctors->designation=$request->designation;

     $doctors->unit=$request->unit;
      $doctors->visiting_time=$request->visiting_time;
     
     $doctors->save();

     echo 'success';
    }

       public function show_doctors(){

    $doctors = DB::table('doctors') ->get();
    return view('show_doctors',  compact('doctors'));
  //    return view('show');
}
}
