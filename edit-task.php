<?php

require 'authentication.php'; // admin authentication check 

// auth check
$user_id = $_SESSION['admin_id'];
$user_name = $_SESSION['name'];
$security_key = $_SESSION['security_key'];
if ($user_id == NULL || $security_key == NULL) {
    header('Location: index.php');
}
//  Author Name: Mayuri K. 
 // for any PHP, Codeignitor, Laravel OR Python work contact me at mayuri.infospace@gmail.com  
 //Visit website : www.mayurik.com
// check admin
$user_role = $_SESSION['user_role'];

$task_id = $_GET['task_id'];



if(isset($_POST['update_task_info'])){
    $obj_admin->update_task_info($_POST,$task_id, $user_role);
}

$page_name="Edit Task";
include("include/sidebar.php");

$sql = "SELECT * FROM task_info WHERE task_id='$task_id' ";
$info = $obj_admin->manage_all_info($sql);
$row = $info->fetch(PDO::FETCH_ASSOC);

?>

<!--modal for employee add-->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


    <div class="row">
      <div class="col-md-12">
        <div class="well well-custom">
          <div class="row">
            
                <h3 class="" style="padding: 7px;">Edit Task </h3><br>

                      <div class="row">
                        <div class="col-md-12">
                          <form class="row" role="form" action="" method="post" autocomplete="off">
                            <div class="form-group col-md-6">
			                    <label class="control-label">Task Title</label>
			                    
			                      <input type="text" placeholder="Task Title" id="task_title" name="task_title" list="expense" class="form-control" value="<?php echo $row['t_title']; ?>" <?php if($user_role != 1){ ?> readonly <?php } ?> val required>
			                  </div>
			                  <div class="form-group col-md-6">
			                    <label class="control-label">Task Description</label>
			                    
			                      <textarea name="task_description" id="task_description" placeholder="Text Deskcription" class="form-control" rows="5" cols="5"><?php echo $row['t_description']; ?></textarea>
			                 
			                  </div>
			                  <div class="form-group col-md-6">
			                    <label class="control-label">Strat Time</label>
			                    
			                      <input type="text" name="t_start_time" id="t_start_time"  class="form-control" value="<?php echo $row['t_start_time']; ?>">
			                   
			                  </div>
			                  <div class="form-group col-md-6">
			                    <label class="control-label">End Time</label>
			                    
			                      <input type="text" name="t_end_time" id="t_end_time" class="form-control" value="<?php echo $row['t_end_time']; ?>">
			             
			                  </div>

			                  <div class="form-group col-md-6">
			                    <label class="control-label">Assign To</label>
			                    
			                      <?php 
			                        $sql = "SELECT user_id, fullname FROM tbl_admin WHERE user_role = 2";
			                        $info = $obj_admin->manage_all_info($sql);   
			                      ?>
			                      <select class="form-control" name="assign_to" id="aassign_to" <?php if($user_role != 1){ ?> disabled="true" <?php } ?>>
			                        <option value="">Select</option>

			                        <?php while($rows = $info->fetch(PDO::FETCH_ASSOC)){ ?>
			                        <option value="<?php echo $rows['user_id']; ?>" <?php
			                        	if($rows['user_id'] == $row['t_user_id']){
			                         ?> selected <?php } ?>><?php echo $rows['fullname']; ?></option>
			                        <?php } ?>
			                      </select>
			                   
			                  </div>

			                   <div class="form-group col-md-6">
			                    <label class="control-label">Status</label>
			                    
			                      <select class="form-control" name="status" id="status">
			                      	<option value="0" <?php if($row['status'] == 0){ ?>selected <?php } ?>>Incomplete</option>
			                      	<option value="1" <?php if($row['status'] == 1){ ?>selected <?php } ?>>In Progress</option>
			                      	<option value="2" <?php if($row['status'] == 2){ ?>selected <?php } ?>>Completed</option>
			                      </select>
			                  </div>
                            
                          
                            <div class="form-group col-md-12">
                       

                              
                                <button type="submit" name="update_task_info" class="btn btn-primary">Update Now</button>
                            
                            </div>
                          </form> 
                
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

	<script type="text/javascript">
	  flatpickr('#t_start_time', {
	    enableTime: true
	  });

	  flatpickr('#t_end_time', {
	    enableTime: true
	  });

	</script>


<?php

include("include/footer.php");
//  Author Name: Mayuri K. 
 // for any PHP, Codeignitor, Laravel OR Python work contact me at mayuri.infospace@gmail.com  
 //Visit website : www.mayurik.com
?>

