<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Job Applicants</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/job.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<form method="post" action="job.php" enctype="multipart/form-data">

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Apply for the Job through this form</p>
                        <input type="" name="" value="Learn More"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Hello ❤</a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                            </li>-->
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply for your Job Here</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                         <label for="date">Select Job</label>
                                         <select class="form-control select2" style="width:100%" name="cat_name" required>
                <?php
				include('dist/includes/dbcon.php');

                   $query3=mysqli_query($con,"select * from category  where status='open' order by cat_name")or die(mysqli_error($con));
                      while($row3=mysqli_fetch_array($query3)){
                ?>
                    <option value="<?php echo $row3['cat_id'];?>"><?php echo $row3['cat_name'];?></option>
                  <?php }?>
                </select>
                                    
                                            <!--<input type="text" class="form-control" placeholder="First Name *" value="" />-->
                                    </div>
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phonenumber"  class="form-control" placeholder="Phone Number *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="date" name="dateofbirth" min="<?php echo date('1800-01-01');?>" max="<?php echo date('2010-12-31');?>"  class="form-control"  placeholder="Date Of birth *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="date">Cover letter</label>
                                            <textarea type="textarea" class="form-control" name="coverletter" placeholder="Place Your Cover Letter *" value="" ></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label for="date">Highest Level of Education</label>
                                            <select name="education" class="form-control">
                                                <option class="hidden"  selected disabled>Highest level of Education</option>
                                                <option value="<?php echo 1;?>">Certificate</option>
                                                <option value="<?php echo 2;?>">Diploma</option>
                                                <option value="<?php echo 3;?>">Degree</option>
                                                <option value="<?php echo 4;?>">Master's</option>
                                                <option value="<?php echo 5;?>">PHD</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="date">Skills Level</label>
                                            <select name="skills" class="form-control">
                                                <option class="hidden"  selected disabled>Skills Level</option>
                                                <option value="<?php echo 1;?>">Beginner</option>
                                                <option value="<?php echo 3;?>">Intermediate</option>
                                                <option value="<?php echo 5;?>">Expert</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="date">Experience</label>
                                            <select name="yearsofexperience" class="form-control">
                                                <option class="hidden"  selected disabled>Experience</option>
                                                <option value="<?php echo 1;?>">0-5 Years</option>
                                                <option value="<?php echo 3;?>">5-10 Years</option>
                                                <option value="<?php echo 5;?>">10+ Years</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="date">Notes About you</label>
                                        <textarea type="textarea" class="form-control" name="notes" placeholder="Write Something About you *" value="" ></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label for="date">Upload your CV</label>
                                            <input type="file"  name="fileToUpload" class="form-control"  value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Submit"/>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading"></h3>
                                
                            </div>
                        </div>
                    </div>
                </div>

                      </div>
</form>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>