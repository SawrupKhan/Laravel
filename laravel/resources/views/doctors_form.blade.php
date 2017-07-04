


@extends('layouts.app')


@section('content')





<meta charset ="UTF-8">
<title> Doctor's Information</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>

<div class="container">
  <h2>Set doctor's Information</h2>
  
  <form action="store" method="post">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label for="designation">Designation</label>
      <input type="text" class="form-control" name="designation">
    </div>
    
     <div class="form-group">
      <label for="unit">Unit</label>
      <input type="text" class="form-control" name="unit">
      </div>

      
       <div class="form-group">
      <label for="Visiting_Time">Visiting Time</label>
      <input type="text" class="form-control" name="visiting_time">
    </div>
   
    <input type ="hidden" name="_token" value = "{{csrf_token()}}"><br/> 
        <label for=""></label>
        <input type="submit"  class="btn btn-success btn-lg" name = "submit" value = "submit">

  </form>
</div>


</body>

@endsection
