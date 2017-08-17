


@extends('layouts.admin')


@section('content')





<meta charset ="UTF-8">
<title> Doctor's Information</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
  

<body >

<div class="container">
  <h2><font style="color:#FFFFFF" >Set doctor's Information</font></h2>
  
  <form action="store" method="post">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Doctor's Name">
    </div>
    <div class="form-group">
      <label for="designation">Designation</label>
      <input type="text" class="form-control" name="designation" placeholder="Designation">
    </div>
    
     <div class="form-group">
      <label for="unit">Unit</label>
      <input type="text" class="form-control" name="unit" placeholder="Unit">
      </div>

      
       <div class="form-group">
      <label for="visiting_time">Visiting Time</label>
      <input type="text" class="form-control" name="visiting_time" placeholder="Visiting time">
    </div>
   
    <input type ="hidden" name="_token" value = "{{csrf_token()}}"><br/> 
        <label for=""></label>
        <input type="submit"  class="btn btn-danger btn-lg" name = "submit" value = "submit">

  </form>
</div>


</body>

@endsection
