@extends('layouts.app')
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    You are logged in as admin !!
                    <div class="links">
                 
                 
               <a href="{{ url('/admin/show') }}" class ="btn btn-success btn-lg ">Show Users ID</a>
                <a href="{{ url('/admin/doctors') }}" class ="btn btn-success btn-lg ">Doctor's Data</a>
                 <a href="{{ url('/admin/show_doctors') }}" class ="btn btn-success btn-lg ">View Doctor</a>
                 <a href="{{ url('/admin/show') }}" class ="btn btn-success btn-lg ">Change Adminship</a>
                  <a href="{{ url('/admin/show') }}" class ="btn btn-success btn-lg ">Set Blog</a>


                    
                  
                   
             </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
