
<?php

session_start();


$conn = mysqli_connect('localhost','root') or die (mysqli_error());
if($conn){
	echo"connection successful";
}
else{
	echo "no connection";
}

mysqli_select_db($conn,'network') or die (mysqli_error());

$Emailid = $_POST['email'];
$Password = $_POST['password'];

$query_email = " SELECT * FROM user WHERE email = '$Emailid' && password = '$Password' ";

$result = mysqli_query($conn,$query_email);

$num = mysqli_num_rows($result);

if($num ==1){
	
	$_SESSION['Email'] = $Emailid;
// 	$qy = "SELECT firstname FROM user WHERE email = '$Emailid'";
// $re = mysqli_query($qy);
// $row = mysqli_fetch($re);
// $_SESSION['username']=$row;
   header('location:home.php');
   
}
else{

	// alert("invalid username/password. Please try again");
	
   header('location:login.php');
   
}


?>