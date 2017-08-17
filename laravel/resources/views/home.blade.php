@extends('layouts.app')

@section('content')




<div class="container" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="background: color url('img/HP-Header-WebsiteDesign.jpg');background-position: center ;backgroud-repeat:no-repeat;"">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <br>

                     <a href="{{ url('/home/read_blog') }}" class ="btn btn-success btn-lg ">Information</a>
                        <a href="{{ url('/home/show_doctors') }}" class ="btn btn-success btn-lg ">Doctor's List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
