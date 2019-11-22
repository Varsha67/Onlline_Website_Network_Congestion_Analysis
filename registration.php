<?php

session_start();
header('location: login.php');

$conn = mysqli_connect('localhost','root') or die (mysqli_error());
if($conn){
	echo"connection successful";
}
else{
	echo "no connection";
}

mysqli_select_db($conn,'network') or die (mysqli_error());
$Firstname =trim( $_POST['firstname']);
$Lastname=  trim($_POST['lastname']);
$Password = trim($_POST['password']);
$pass_len = strlen($Password);
$Confirmpassword = trim($_POST['confirmpassword']);
$conpass_len = strlen($Confirmpassword);
$Emailid = trim($_POST['email']);




$query_email = " SELECT email FROM user WHERE email = '$Emailid' ";

$result = mysqli_query($conn,$query_email);

$num = mysqli_num_rows($result);

if($num >0){
	header('location:SiginUP.php');
	echo 'email address is already exist' ;
}
else{

// validation on password or confirm password
//	is for email specified symbol
	// if(!filter_var($Emailid,FILTER_VALIDATE_EMAIL)){

	// 	$msg = "Please enter valid email address";
	// }
	// else
	if(!empty($Firstname) && !empty($Lastname)){
		if (preg_match('/[^A-Za-z0-9]/', $Firstname)) // '/[^a-z\d]/i' should also work.
{
  // string contains only english letters & digitts
	if (preg_match('/[^A-Za-z0-9]/', $Lastname)) {



		if(filter_var($Emailid,FILTER_VALIDATE_EMAIL)){


	 if($pass_len>=6 && $conpass_len>=6){


		if($_POST['password'] == $_POST['confirmpassword']){


	$qy = "insert into user(firstname,lastname,password,confirmpassword,email) values ('$Firstname','$Lastname','$Password','$Confirmpassword','$Emailid')";
	
	
	
	if (mysqli_query($conn,$qy)){
		echo "Database created successfully";

    } 
    else {

    echo "Error creating database: "or die (mysqli_error($conn));
         }
       }
       else{

        header('location:SiginUP.php');
         
      }
     }

     else{
     	header('location:SiginUP.php');
     	echo  " password and confirmpass should be greater than  or equal to 6 character";
     }
 }
 else{
 	header('loaction:SiginUP.php');
 }
}
else {
 	# code...
 	//name
 	header('location:SiginUP.php');
 }
}
else {
 	# code...
 	//name
 	header('location:SiginUP.php');
 }
}
else {
 	# code...
 	//name
 	header('location:SiginUP.php');
 }
  }

?>


<!-- <script>
function myFunction() {
  var txt;
  if (confirm("Press a button!")) {
    txt = alert("login successfully");
  } else {
  	
    txt = "You pressed Cancel!";
  }

}
</script> -->