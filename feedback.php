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

$Name = $_POST['name'];
$Email = $_POST['email'];
$Message = $_POST['message'];

$query_email = " SELECT * FROM feedback ";

$result = mysqli_query($conn,$query_email);

$num = mysqli_num_rows($result);


$qy = "insert into feedback(name,email,message) values ('$Name','$Email','$Message')";
	
	if (mysqli_query($conn,$qy)){
		echo "Database created successfully";
		header('location:contact.php');
    } 
    else {
    echo "Error creating database: "or die (mysqli_error($conn));
         }

     

?>