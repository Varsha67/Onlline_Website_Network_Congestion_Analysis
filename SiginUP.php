<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Merged Forms Page Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
	 <link rel="stylesheet" href="register.css" type="text/css" media="all" />
</head>
<body>
	<?php
	if (isset($_GET['message'])) {
		# code...
		echo $message;
	}
	?>
   <!-- /form-26-section -->
   <section class="form-26-1">
         <div class="form-26-mian">
				<div class="layer">
			<div class="wrapper">
			<div class="form-inner-cont">
					<div class="forms-26-info">
						<h2>Register</h2>
                        <p>You have to be Register yourself Here!</p>
                    </div>
					<div class="form-right-inf"> 
							<form  action="registration.php" method="post" class="signin-form">	
							 <div class="forms-gds">
								 <div  class="form-input">
									<input type="text" name="firstname" placeholder="Firstname" required />
								</div>
								<div  class="form-input">
										<input type="text" name="lastname" placeholder="Lastname" required />
									</div>
								<div  class="form-input">
									<input type="email" name="email" placeholder="Email" required />
								</div>
								<div  class="form-input">
									<input type="password" name="password" placeholder="Password" required />
									<span id="message"></span>
								</div>
								<div  class="form-input">
									<input type="password" name="confirmpassword" placeholder="Confirm Password" required />
									<span id="messages"></span>
								</div>
								<div  class="form-input"><button type ="submit" class="btn" >Signup</button></div>
							</div>
							<h6 class="already">Already have an account? <a href="login.php"><span>Login Here<span></span></span></a></h6>
						</form>
						
                    </div>
					<div class="copyright">
                    <p style="text-align: right;font-size: 12px">Design by Jyoti Gupta</p>
                </div>
                </div>
			</div>
		</div>
		    </div>
		</section>
		<div style="text-align:center;">





  <!-- !-- //form-26-section --> -->
      <!-- <script>
      	function myfun(){
      		var a = document.getElementById("password").value;
      		var b = document.getElementById("confirmpassword").value;
      		if (a.length<=6) {
      			document.getElementById("message").innerHTML="** password length greater than or equalto 6 character";
      			return false;
      		}
      		if (a1=b) {
      			document.getElementById("message").innerHTML="** password are not same";
      			return false;
      		}
      	}
      </script>
     -->

</body>
</html>