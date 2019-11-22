<?php

session_start();
// if (!isset($_SESSION['Email'])) {
// 	# code...
// 	header('location:login.php');
// }

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Network Analysis - Contact Page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <link href="css/all.min.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet" />
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body> 

	<div class="container">
        <div class="placeholder">
        	<div class="parallax-window" data-parallax="scroll" >
           <nav>
			<section class="nav-container">
			<aside class = "menu">
            <div class="menu-content" style="margin-left: : 10px; font-size: 30px;">
			    <h2 class= "text"><?php echo $_SESSION['Email']; ?>|<a href="logout.php" >Logout</a>
			    </h2>
			    </div>
			    <div class="arrow-up"></div>
			</aside>  
			</section>
				</nav>
				 <img src="img/12.jpg" alt="Snow" style="width:100%"> 
            
                <div class="tm-header">
                    <div class="row tm-header-inner">
                        <div class="col-md-6 col-12">
                            <img src="img/IconsWebAboutUsNews.png" alt="Logo" class="tm-site-logo" height=60px width=80px />
                            <div class="tm-site-text-box">
                                <h1 class="tm-site-title" style="font-size: 30px">Network  Congestion Analysis</h1>
                                <h6 class="tm-site-description">Based on Different network</h6>
                            </div>
                        </div>
                        <nav class="col-md-6 col-12 tm-nav">
                            <ul class="tm-nav-ul">
                                <li class="tm-nav-li"><a href="home.php" class="tm-nav-link">Home</a></li>
                                <li class="tm-nav-li"><a href="about.php" class="tm-nav-link active">About</a></li>
                                <li class="tm-nav-li"><a href="contact.php" class="tm-nav-link">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
       
       		
			<div class="wrap-contact100" style="background-image: linear-gradient(#76a0ef,

#8fbc8f,#8fbc8f); width:100% ;" >
				<div class="contact100-pic js-tilt" data-tilt >
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form action="feedback.php" method="post" class="contact100-form validate-form">
					<span class="contact100-form-title">
						Get in touch
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea class="input100" name="message" placeholder="Message"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="container-contact100-form-btn">
						<button type = "submit" class="contact100-form-btn">
							Send
						</button>
					</div>
				</form>
				<footer class="tm-footer " style="font-size: 40px; margin-left: 15%; margin-right:10% ">
			<p> All rights reserved | Made By: Varsha Varshney,Muskan Varshney, Jyoti Gupta , Himanshu Sharma</p>
    </footer>
            </div>
          
    </div>
</div>


     
    
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/main.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>   
			</body>
</html>