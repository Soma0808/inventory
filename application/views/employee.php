

  <div class="container">
      <div class="row">
          <div class="col-md-6 col-md-offset-3">
               <table class="table">
                   <tr>
                       <th>Employee ID</th>
                       <th>First Name</th>
                       <th>Last Name</th>
                       <th>Email</th>
                       <th>Birthday</th>
                       <th>Action</th>
                   </tr>
                     
                    <?php foreach($employees as $e): ?>
                    <tr>
                        <td><?php echo $e['employee_id'];?></td>
                        <td><?php echo $e['firstname'];?></td>
                        <td><?php echo $e['lastname'];?></td>
                        <td><?php echo $e['email'];?></td>
                        <td><img src="<?php echo base_url().'uploads/'.$e['profilepic'];?>" alt="" width="100"></td>
                        <td
                   
                        
                        <td><a href="<?php echo site_url('employee/edit/'.$e['employee_id']);?>" class="btn btn-md btn-success">Edit</a></td>
                        <td> <a href="<?php echo site_url('employee/delete/'.$e['employee_id']); ?>" class="btn btn-md btn-danger">Delete</a></td>
                    </tr>
                    <?php endforeach;?>


               </table>

               <a href="<?php echo base_url()."employee/add";?>" class="btn btn-md btn-primary">Add Name</a>

          </div>

      </div>
  </div>
    
