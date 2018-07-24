<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
            crossorigin="anonymous">
   </head>
	
   <body> 


      <div class="container">
          <div class="row">
              <div class="col-md-6 col-md-offset-3">
                    <a href = "<?php echo base_url()."stud/add_view"; ?>">Add</a>   
                     <!-- = home url() -->


                <table class="table " border = "1"> 
                    <?php 
                        $i = 1; 
                        echo "<tr>"; 
                        echo "<td>Sr#</td>"; 
                        echo "<td>Roll No.</td>"; 
                        echo "<td>Name</td>"; 
                        echo "<td>Edit</td>"; 
                        echo "<td>Delete</td>"; 
                        echo "<tr>"; 
                            
                        foreach($records as $r) { 
                        echo "<tr>"; 
                        echo "<td>".$i++."</td>"; 
                        echo "<td>".$r->roll_no."</td>";  // $r['roll_no.']
                        echo "<td>".$r->name."</td>"; 
                        echo "<td><a href = '".base_url()."stud/edit/"
                            .$r->roll_no."'>Edit</a></td>"; 
                        echo "<td><a href = '".base_url()."stud/delete/"
                            .$r->roll_no."'>Delete</a></td>"; 
                        echo "<tr>"; 
                        } 
                    ?>
                </table> 

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