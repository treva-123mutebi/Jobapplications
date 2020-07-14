<?php
//session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
date_default_timezone_set("Asia/Manila"); 
?>
<?php
include('../dist/includes/dbcon.php');

$branch=$_SESSION['branch'];
$query=mysqli_query($con,"select * from branch where branch_id='$branch'")or die(mysqli_error($con));
  $row=mysqli_fetch_array($query);
           $branch_name=$row['branch_name'];
?>

      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header" style="padding-left:20px">
              <a href="home.php" class="navbar-brand"><b><i class="glyphicon glyphicon-home"></i> <?php echo $branch_name;?> </b></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
				  <li class="">
                
                    <a href="log.php" class="dropdown-toggle">
                      <i class="glyphicon glyphicon-list-alt"></i>
                      History Log
                    </a>
                  </li>
                  <!-- Notifications Menu -->
                  <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="glyphicon glyphicon-refresh text-red"></i> Reorder
                      <span class="label label-danger">
                      
                      </span>
                    </a>-->
                    <ul class="dropdown-menu">
                      <li class="header"> <?php echo$row['count'];?> </li>
                      <li>
                        <!-- Inner Menu: contains the notifications -->
                        <ul class="menu">
                        
                        </ul>
                      </li>
                      <li class="footer"><a href="inventory.php">View all</a></li>
                    </ul>
                  </li>
                  <!-- Tasks Menu -->
				   <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="joboffers.php" class="dropdown-toggle" data-toggle="#">
                      <i class="glyphicon glyphicon-wrench"></i> JOBS
                      
                    </a>
                    
                  </li>
                  <!-- Tasks Menu -->
				   <!-- Tasks Menu -->
				   <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="topapplicants.php">
                      <i class="glyphicon glyphicon-list text-green"></i> Top Applicant List
                      
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                      </li>
                     
                    </ul>
                  </li>
                  <!-- Tasks Menu -->
				   <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="glyphicon glyphicon-stats text-red"></i> Report
                     
                    </a>-->
                    
                  </li>
                  <!-- Tasks Menu -->
				  <li class="">
                    <!-- Menu Toggle Button -->
                    <a href="profile.php" class="dropdown-toggle">
                      <i class="glyphicon glyphicon-cog text-orange"></i>
                      <?php echo $_SESSION['name'];?>
                    </a>
                  </li>
                  <li class="">
                    <!-- Menu Toggle Button -->
                    <a href="logout.php" class="dropdown-toggle">
                      <i class="glyphicon glyphicon-off text-red"></i> Logout 
                      
                    </a>
                  </li>
                  
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>