<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Top Job Applicants | <?php include('../dist/includes/title.php');?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <style>
      
    </style>
 </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-<?php echo $_SESSION['skin'];?> layout-top-nav">
    <div class="wrapper">
      <?php include('../dist/includes/header.php');
      include('../dist/includes/dbcon.php');
      ?>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              <a class="btn btn-lg btn-warning" href="home.php">Back</a>
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Top Applicants</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="row">
	      <div class="col-md-4">
              
                
                
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
            
            <div class="col-xs-16">
              <div class="box box-primary">
    
                <div class="box-header">
                  <h3 class="box-title">Top Applicant List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Job Applied For</th>
                        
                        
                        <th>Gender</th>
                       
                        <th>Date Of Birth</th>
                        <th>Download CV</th>
                        <th>Total Rating</th>
            						
            						
            						
                        <th>View Application</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
		
        $query=mysqli_query($con,"select * from applicants natural join category where branch_id='1' and ratingtotal >= '5' order by cat_name")or die(mysqli_error());
		while($row=mysqli_fetch_array($query)){
      $cat_id=$row['cat_id'];
      $totalapplicants=mysqli_query($con,"select count( * ) as total_applicants from category natural join applicants WHERE cat_id = '$cat_id'  group by cat_id")or die(mysqli_error());
      $row1=mysqli_fetch_array($totalapplicants);
      
		
?>
                      <tr>
                      <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['phonenumber'];?></td>
                        <td><?php echo $row['cat_name'];?></td>
                        
                        
						            <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['dateofbirth'];?></td>
                        <td><a href="../<?php echo $row['cv'];?>">Download Applicant CV</a></td>
                        <td><?php echo $row['ratingtotal'];?></td>

                        <td>
				<a href="#updateordinance<?php echo $row['ID'];?>" data-target="#updateordinance<?php echo $row['ID'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-edit text-blue"></i></a>
				
						</td>
                      </tr>
<div id="updateordinance<?php echo $row['ID'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
	  <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Applicant Details</h4>
              </div>
              <div class="modal-body">
			  <form class="form-horizontal" method="post" action="#" enctype='multipart/form-data'>
                
				<div class="form-group">
					<label class="control-label col-lg-3" for="name">Applicant Name </label>
					<div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['ID'];?>" required>  
					  <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'];?>" readonly>  
					</div>
        </div>
        <br/><br/><br/>
        <div class="form-group">
					<label class="control-label col-lg-3" for="name">Email :</label>
					<div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['ID'];?>" required>  
                    <input type="text" class="form-control" id="name" name="email" value="<?php echo $row['email'];?>" readonly>  
					</div>
        </div>
        <br/><br/><br/>
        <div class="form-group">
					<label class="control-label col-lg-3" for="name">Phone Number</label>
					<div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['ID'];?>" required>  
                    <input type="text" class="form-control" id="name" name="phonenumber" value="<?php echo $row['phonenumber'];?>" readonly>
					</div>
				
				
				
              </div>

              <hr>
              <div class="form-group">
					<label class="control-label col-lg-3" for="name">Date of Birth :</label>
					<div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['ID'];?>" required>  
                    <input type="text" class="form-control" id="name" name="dateofbirth" value="<?php echo $row['dateofbirth'];?>" readonly>  
					</div>
        </div>
        <br/><br/><br/>
        <div class="form-group">
					<label class="control-label col-lg-3" for="name">Gender :</label>
					<div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['ID'];?>" required>  
                    <input type="text" class="form-control" id="name" name="gender" value="<?php echo $row['gender'];?>" readonly>  
					</div>
        </div>
        <br/><br/><br/>
        <div class="form-group">
					<label class="control-label col-lg-3" for="name">Job Applied for </label>
					<div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['ID'];?>" required>  
                    <input type="text" class="form-control" id="name" name="cat_name" value="<?php echo $row['cat_name'];?>" readonly>  
					</div>
        </div>
        <br/><br/><br/>
        <div class="form-group">
					<label class="control-label col-lg-3" for="name">Skills </label>
          <div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['ID'];?>" required>
                     
                    <input type="text" class="form-control" id="name" name="skills" value="<?php

                     switch($row['skills']){
                       case $row['skills'] >= 1 and $row['skills'] <=1:
                        echo 'Beginner';
                        break;
                        case $row['skills'] >= 3 and $row['skills'] <=3:
                          echo 'Intermediate';
                          break;
                        case $row['skills'] >= 5 and $row['skills'] <=5:
                            echo 'Expert';
                            break;
                        default:
                           echo 'No skill level registered';      
                     }
                     ?>" readonly>  
					</div>
        </div>
        <br/><br/><br/>
        <div class="form-group">
					<label class="control-label col-lg-3" for="name">Years Of Experience </label>
					<div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['ID'];?>" required>  
          <input type="text" class="form-control" id="name" name="yearsofexperience" value="<?php

switch($row['yearsofexperience']){
  case $row['yearsofexperience'] >= 1 and $row['yearsofexperience'] <=1:
   echo '0 - 5 Years';
   break;
   case $row['yearsofexperience'] >= 3 and $row['yearsofexperience'] <=3:
     echo '5 - 10 Years';
     break;
   case $row['yearsofexperience'] >= 5 and $row['yearsofexperience'] <=5:
       echo '5 - 10 Years';
       break;
   default:
      echo 'No Years of Experience Registered';      
}
?>" readonly>  
					</div>
        </div>
        <br/><br/><br/>
        <div class="form-group">
					<label class="control-label col-lg-3" for="name">Highest level of Education</label>
					<div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['ID'];?>" required>  
          <input type="text" class="form-control" id="name" name="education" value="<?php

switch($row['education']){
  case $row['education'] >= 1 and $row['education'] <=1:
   echo 'Certificate';
   break;
   case $row['education'] >= 2 and $row['education'] <=2:
     echo 'Diploma';
     break;
     case $row['education'] >= 3 and $row['education'] <=3:
      echo 'Bachelor Degree';
      break;
     case $row['education'] >= 4 and $row['education'] <=4:
        echo 'Masters Degree';
        break;   
   case $row['education'] >= 5 and $row['education'] <=5:
       echo 'PHD';
       break;
   default:
      echo 'No Highest level of Education registered';      
}
?>" readonly>  
					</div>
        </div>
        <br/><br/>
        <div class="form-group">
					<label class="control-label col-lg-3" for="name">About Applicant </label>
					<div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['ID'];?>" required>  
                    <input type="text" class="form-control" id="name" name="notes" value="<?php echo $row['notes'];?>" readonly>  
					</div>
        </div>
        
        <br/><br/><br/>
        <div class="form-group">
					<label class="control-label col-lg-3" for="name">Cover Letter </label>
					<div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['ID'];?>" required>  
                    <textarea name="txt_descripcion" cols="45" rows="10" id="txt_descripcion" readonly><?php echo htmlspecialchars($row['coverletter']);?></textarea>  
					</div>
        </div>
        <br/><br/><br/>
        <div class="form-group">
					
					<div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['ID'];?>" required>  
                    <label class="control-label col-lg-3" for="price">CV:<a class="btn btn-danger" href="../<?php echo $row['cv'];?>">Click To Download</a></label>  
					</div>
        </div>

              <div class="modal-footer">
		
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
			  </form>
            </div>
			
        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->                    
<?php }?>					  
                    </tbody>
                    <tfoot>
                      <tr>
                          <th>Top Applicant List</th>
                      </tr>					  
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
 
            </div><!-- /.col -->
			
			
          </div><!-- /.row -->
	  
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <?php include('../dist/includes/footer.php');?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
