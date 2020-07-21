<?php 

include('dist/includes/dbcon.php');

    $name = $_POST['name'];
    $cat_name = $_POST['cat_name'];
	//$username = $_POST['username'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	//$password = $_POST['password'];
	$dateofbirth = $_POST['dateofbirth'];
	//$city = $_POST['city'];
	$gender = $_POST['gender'];
	$notes = $_POST['notes'];
	$skills = $_POST['skills'];
	$education = $_POST['education'];
	$coverletter = $_POST['coverletter'];
	$yearsofexperience= $_POST['yearsofexperience'];
	$ratingtotal = $skills+$education+$yearsofexperience;
$target_dir = "cvs/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
	echo "Sorry, file already exists.";
	$uploadOk = 0;
  } 
  // Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
	echo "Sorry, your file is too large.";
	$uploadOk = 0;
  } 
  // Allow certain file formats
if($imageFileType != "pdf" && $imageFileType != "docx" 
&& $imageFileType != "zip" ) {
  echo "Sorry, only pdf,docx,zip files are allowed.";
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	  //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	} else {
	  //echo "Sorry, there was an error uploading your file.";
	}
  } 
	


		//$pass=md5($password);
		//$salt="a1Bz20ydqelm8m1wql";
		//$pass=$salt.$pass;
	
			
			mysqli_query($con,"INSERT INTO applicants(name,email,phonenumber,dateofbirth,gender,coverletter,yearsofexperience,notes,skills,education,ratingtotal,cv,cat_id,branch_id)
			VALUES('$name','$email','$phonenumber','$dateofbirth','$gender','$coverletter','$yearsofexperience','$notes','$skills','$education','$ratingtotal','$target_file','$cat_name','1')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Congratulations! Your Job Application has been Submitted.');</script>";
					  echo "<script>document.location='index.php'</script>";  
					
				
					
				
			
	
?>
