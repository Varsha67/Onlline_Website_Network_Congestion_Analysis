
<?php

session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Network Congestion</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <link href="css/all.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
</head>

<body>

    <div class="container">
        <div class="placeholder">
           <nav>
			<section class="nav-container">
			<aside class = "menu">
            <div class="menu-content" style="font-size: 30px; margin-right: 1px;">
			    <h2 class= "text" ><?php echo $_SESSION['Email']; ?>|<a href="logout.php">Logout</a>
          </h2>
			    </div>
			    <div class="arrow-up"></div>
			</aside>  
			</section>
				</nav>
            <div class="parallax-window" data-parallax="scroll" data-image-src="img/12.jpg">
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

        <main>
            <header class="row tm-welcome-section" style="margin-left: 20%">
                <h2 class="col-12 text-center tm-section-title" >About this Project</h2>
<p class="col-12 text-center">This research is an effort to develop visual-graphic interfaces for sense-making of large networks. 
The goal is to create an algorithmic model and prototype that will allow researchers 
to study and analyze the hidden patterns in a wide range of networks by identifying and 
characterizing local communities and connectivity between a set of pre-marked nodes 
within large networks. There is a staggering wealth of electronic data that is being generated,
collected and stored due to the digital revolution. What scientists lack are meaningful ways of 
translating this data into useful information and knowledge. This overabundance of data, with largely unknown conclusions, is evident across all academic disciplines, ranging from medicine and epidemiology to advertising and marketing. The question that ultimately needs to be addressed is — how do we better understand and make predictions about the future based on the relationships between these disparate sets of data. </p>
            </header>
              <div class="row">
   <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team" style="align-items: center">
        <div class="picture">
          <img class="img-fluid" src="img/s">
        </div>
        <div class="team-content">
          <h3 class="name">Pankaj Kappor(Asst.Professor)</h3>
          <h4 class="title">Project Guider</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>    
      
  </div>
  <div class="row">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="img/var2.jpg">
        </div>
        <div class="team-content">
          <h3 class="name">Varsha Varshney</h3>
          <h4 class="title">Web Developer</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="img/m1.jpeg">
        </div>
        <div class="team-content">
          <h3 class="name">Muskan Varshney</h3>
          <h4 class="title">Web Developer</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
   </div> 
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team" >
        <div class="picture">
          <img class="img-fluid" src="img/jyoti.jpg">
        </div>
        <div class="team-content">
          <h3 class="name">Jyoti Gupta</h3>
          <h4 class="title">Web Developer</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
      </div>
         <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="img/him.jpeg">
        </div>
        <div class="team-content">
          <h3 class="name">Himanshu Sharma</h3>
          <h4 class="title">Web Developer</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
       </div>
            </main>
            
           <footer class="tm-footer text-center">
			<p> All rights reserved | Made By: Varsha Varshney,Muskan Varshney, Jyoti Gupta , Himanshu Sharma
    </footer>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
</body>

</html>