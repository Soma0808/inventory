<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">


            <?php echo form_open('employee/update/'.$editemployee['employee_id']); ?>
                                <!-- $routes　の値になる -->
                <label for="fname">First Name</label>
                <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $editemployee['firstname'];?>">  
                <!-- Employee.php の $data['editemployee'] -> $editmployee['firstname']  -->

                <label for="lname">Last Name</label>
                <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $editemployee['lastname'];?>">

                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $editemployee['email'];?>">

                <label for="bdate">Birthday</label>
                <input type="date" name="bdate" class="form-control" id="bdate" value="<?php echo $editemployee['birthdate'];?>">

                <input type="submit" class="btn btn-md btn-primary" value="Update">
             

            <?php echo form_close();?>
                                  

        </div>
    </div>
</div>