

<div class="container">
      <div class="row">
          <div class="col-md-6 col-md-offset-3">
               <table class="table">
                   <tr>
                       <th>Player ID</th>
                       <th>First Name</th>
                       <th>Last Name</th>
                       <th>Email</th>
                      
                       <th>Action</th>
                   </tr>
                     
                    <?php foreach($team as $t): ?>
                    <tr>
                        <td><?php echo $t['employee_id'];?></td>
                        <td><?php echo $t['firstname'];?></td>
                        <td><?php echo $t['lastname'];?></td>
                        <td><?php echo $t['email'];?></td>
                        
                   
                        
                        <td><a href="<?php echo site_url('team/edit/'.$t['player_id']);?>" class="btn btn-md btn-success">Edit</a></td>
                        <td> <a href="<?php echo site_url('team/delete/'.$e['player_id']); ?>" class="btn btn-md btn-danger">Delete</a></td>
                    </tr>
                    <?php endforeach;?>


               </table>

               <a href="<?php echo base_url()."team/add";?>" class="btn btn-md btn-primary">Add Name</a>

          </div>

      </div>
  </div>
    