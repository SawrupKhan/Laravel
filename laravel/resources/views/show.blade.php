@extends('layouts.admin')
@section('content')
<div class="container">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<h1><font style="color:#FFFFFF"> Student's ID List</font></h1>
<br>
    <table id="table" class="table table-striped table-bordered"  cellspacing="0" width="100%">
    <thead>
        <tr>
            <th bgcolor="#FFFFFF">Name</th>
            <th bgcolor="#FFFFFF">Email</th>
            <th bgcolor="#FFFFFF">Roll</th>
        </tr>
    </thead>

    <?php

foreach ($users as $value)
{
	?>
    <tbody>

        <tr>

            <td><?php echo $value-> name;
            ?></td> 

            <td><?php echo $value-> email;?></td>
            <td><?php echo $value-> roll;?></td>
          
        </tr>
    </tbody>

    <?php } ?>

</table>

</div>
@endsection


 <script type="text/javascript">
 	
 	 $(document).ready(function() {
    $('#table').DataTable();
    } );	
 </script>

