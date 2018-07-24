<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <?php echo form_open('team/create') ?>
                                <!-- $routes　の値になる -->
                <label for="fname">First Name</label>
                <input type="text" class="form-control" name="fname" id="fname">

                <label for="lname">Last Name</label>
                <input type="text" class="form-control" name="lname" id="lname">

                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email">

                <label for="bdate">Birthday</label>
                <input type="date" name="bdate" class="form-control" id="bdate">

                <input type="submit" class="btn btn-md btn-primary" value="Add">
             

            <?php echo form_close();?>
                                  

        </div>
    </div>
</div>