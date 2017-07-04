<?php




namespace App\Http\Controllers;


use Illuminate\support\Facades\DB;

use Illuminate\Http\Request;
use App\admins;

class DatabaseController extends Controller
{
  

   public function show(){

   	$admins = DB::table('admins') ->get();
   	return view('show',  compact('admins'));
  // 	return view('show');
   }
}
