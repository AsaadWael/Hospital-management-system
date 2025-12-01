<?php 
require_once("include/config.php");
if(!empty($_POST["emailid"])) {
	$email= $_POST["emailid"];
	
		$result =mysqli_query($con,"SELECT docEmail FROM doctors WHERE docEmail='$email'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> E-posta zaten mevcut.</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Kayıt için e-posta uygun.</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>
