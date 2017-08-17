@extends('layouts.app')
@section('content')

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>


    <table id="table" class="table table-striped table-bordered"  cellspacing="0" width="100%">
    <thead>
        <tr>
              <th>title</th>
            <th>post</th>
          
        </tr>
    </thead>

    <?php

foreach ($read_blog as $value)
{
    ?>
    <tbody>

        <tr>

             <td><?php echo $value-> title;
           ?></td> 

            <td><?php echo $value-> post;?></td>
          
        </tr>
    </tbody>

    <?php } ?>
</table>


 <script type="text/javascript">
    
     $(document).ready(function() {
    $('#table').DataTable();
    } );    
 </script>
@endsection