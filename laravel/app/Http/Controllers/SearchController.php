<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class SearchController extends Controller
{
    public function index()
    {
        return view('search.search');
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
