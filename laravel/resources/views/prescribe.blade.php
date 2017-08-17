


@extends('layouts.app4')


@section('content')





<meta charset ="UTF-8">
<title>Student Entry Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
  

<body >

<div class="container">
  <h2><font style="color:#FFFFFF" ><center>Prescription List</center></font></h2><br>
  
  <form action="entry" method="post">
    <div class="form-group">
      <label for="code"><font style="color:#FFFFFF">Prescription Code</fonts></label>
      <input type="text" class="form-control" name="code" placeholder="Pres. Code">
    </div>
    <div class="form-group">
      <label for="roll">Roll</label>
      <input type="text" class="form-control" name="roll" placeholder="Roll Number">
    </div>
    
     <div class="form-group">
      <label for="problem">Diseases</label>
      <input type="text" class="form-control" name="problem" placeholder="Diseases name">
      </div>

      
       <div class="form-group">
      <label for="name">Physician Name</label>
      <input type="text" class="form-control" name="name" placeholder="Physician Name">
    </div>

    <div class="form-group">
      <label for="details">Details</label>
      <input type="text" class="form-control" name="details" placeholder="Treatment Details">
    </div>
   
    <input type ="hidden" name="_token" value = "{{csrf_token()}}"><br/> 
        <label for=""></label>
        <input type="submit"  class="btn btn-danger btn-lg" name = "submit" value = "submit">

  </form>
</div>


</body>

@endsection
