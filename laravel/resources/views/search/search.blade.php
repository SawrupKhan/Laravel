@extends('layouts.app4')
@section('content')

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <div class="container">
 <div class="row">
                <div class="panel panel-defult">
                <div class="panel-heading">
                <h3>Prescrription Info</h3>
                </div>
<div class="panel-body"
<div class ="form-group">
<input type="text" class ="form-control" id="search" name ="search"></input>
</div>



    <table id="table" class="table table-striped"  >
    <thead>
        <tr>
            <th  bgcolor="#FFFFFF" >Code</th>
            <th  bgcolor="#FFFFFF">Roll</th>
            <th  bgcolor="#FFFFFF">Dieseases</th>
            <th  bgcolor="#FFFFFF">Physician Name</th>
            <th  bgcolor="#FFFFFF">Details</th>
        </tr>
    </thead>

    <?php

foreach ($prescription as $value)
{
    ?>
    <tbody>

        <tr>

             <td><?php echo $value-> code;
           ?></td> 

            <td><?php echo $value-> roll;?></td>
            <td><?php echo $value-> problem;?></td>
            <td><?php echo $value-> name;?></td>
             <td><?php echo $value-> details;?></td>
        </tr>
    </tbody>

    <?php } ?>
</table>


 <script type="text/javascript">
    
     $(document).ready(function() {
    $('#search').on('keyup',function()
    {
        $value=$(this).val();
        $.ajax({
                type:'get',
                url : '{{URL::to('search')}}',
                data :{'search':$value},
                success:function(data){
                    $('tbody').html(data);

                        
                }

        });
       

    
    } )   
 </script> 
@endsection
