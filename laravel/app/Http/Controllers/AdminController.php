<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\doctors;
use App\prescription;



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
return view('success');
    
    }

       public function show_doctors(){

    $doctors = DB::table('doctors') ->get();
    return view('show_doctors',  compact('doctors'));
  //    return view('show');
}

public function change_admin()
{

    return view('change_admin');
}

public function student_entry()
{
    return view('prescribe');
}

  public function entry(Request $request)
    {
     $prescription = new prescription;

     $prescription->code=$request->code;
     $prescription->roll=$request->roll;
     $prescription->problem=$request->problem;
     $prescription->name=$request->name;
     $prescription->details=$request->details;

     $prescription->save();
return view('success1');
    
    }
    public function show_entry()
    {

         $prescription = DB::table('prescriptions') ->get();
    return view('show_prescribe_list',  compact('prescription'));
    }

    public function search(Request $request)
    {
        if ($request->ajax())
        {
            $output="";
            $prescription=DB::table('prescriptions')->where('roll','LIKE','%'.$request->search.'&')
                                                    ->orWhere('name','LIKE','%'.$request->search.'%')-get();

            if($prescription)
            {
                foreach($prescription as $key=>$prescrip){
                   $output.='<tr>'.
                            '<td>'.$prescrip->code. '</td>'.
                             '<td>'.$prescrip->roll. '</td>'.
                            '</tr>';
                }
                return Response($output);
               
            }                                        
        }

    }



}
