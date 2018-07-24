<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Students Example</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
</head>

<body>
    <?php 
            // echo form_open('Stud_controller/add_student'); //open form <form action="Stud_controller" method="add_student"> と同じ
            // echo form_label('Roll No.'); 
            // echo form_input(array('id'=>'roll_no','name'=>'roll_no')); //<input type="text" id="roll_no" name="roll_no">
            // echo "<br/>"; 
			
            // echo form_label('Name'); 
            // echo form_input(array('id'=>'name','name'=>'name')); 
            // echo "<br/>"; 
			
            // echo form_submit(array('id'=>'submit','value'=>'Add')); 
            // echo form_close(); 
         ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <?php echo form_open ('Stud_controller/add_student');?>
                <label>Roll No</label>
                <input type="text" id="roll_no" class="form-control" name="roll_no">
                <br>

                <label>Name</label>
                <input type="text" name="name" class="form-control" id="name">
                <br>

                <input type="submit" id="submit" class="btn btn-md btn-primary" value="Add">

                <?php form_close();?>

            </div>
        </div>
    </div>
</body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous"></script>

</html>

<?php
// <?php echo form_open_multipart('users/create');  
?>