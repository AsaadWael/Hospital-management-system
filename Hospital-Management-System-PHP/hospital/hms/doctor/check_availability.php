<?php 
require_once("include/config.php");
if(!empty($_POST["email"])) {
	$email= $_POST["email"];
$result =mysqli_query($con,"SELECT PatientE-posta FROM tblpatient WHERE PatientE-posta='$email'");
$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> E-posta already exists .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> E-posta available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>
