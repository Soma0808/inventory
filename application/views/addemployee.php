<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <?php echo $error;?> 
            <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

            <?php echo form_open_multipart('employee/create'); ?>
            <!-- $routes　の値になる -->
            <label for="fname">First Name</label>
            <input type="text" class="form-control" name="fname" value="<?php echo set_value('fname');?>" id="fname">

            <label for="lname">Last Name</label>
            <input type="text" class="form-control" name="lname" id="lname">

            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email">

            <label for="bdate">Birthday</label>
            <input type="date" name="bdate" class="form-control" id="bdate">

            <br>

            <div class="form-group">
                <label>Coose file</label>
                <input type="file" name="profilepic" id="profilepic">
            </div>

            <input type="submit" class="btn btn-md btn-primary" value="Add">


            <?php echo form_close();?>


        </div>
    </div>
</div>