@extends('layouts.admin')
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><p><font size="6">Admin Panel</font></p></div>

                <div class="panel-body">
                 <p><font size="4">You are logged in as Admin !!</font></p>
                    <div class="links">
                 
                 
               <a href="{{ url('/admin/show') }}" class ="btn btn-success btn-lg ">Show Users ID</a>
                <a href="{{ url('/admin/doctors') }}" class ="btn btn-success btn-lg ">Doctor's Data</a>
                 <a href="{{ url('/admin/show_doctors') }}" class ="btn btn-success btn-lg ">View Doctor</a>
                 <a href="{{ url('/admin/show') }}" class ="btn btn-success btn-lg ">Change Adminship</a>
                  <a href="{{ url('/admin/show') }}" class ="btn btn-success btn-lg ">Set Blog</a>
                  <br><br>

                
                        <p><font size="5">Hello Honorable Admin,</font></p>
                        <br>

                        <p><font size="4">This is your admin dashboard.You can control this website from here. </font></p>


                    
                  
                   
             </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
