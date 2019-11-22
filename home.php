<?php

session_start();
if (!isset($_SESSION['Email'])) {
  # code...
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Networking Congestion</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
  <link href="style.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
</head>
<body> 

  <div class="container">
    <div class="placeholder">
      <div class="parallax-window" data-parallax="scroll" >
      <nav>
      <section class="nav-container">
      <aside class = "menu">
            <div class="menu-content" style="margin-left: : 10px; font-size: 30px;">
          <h2 class= "text" ><?php echo $_SESSION['Email']; ?>|<a href="logout.php">Logout</a>
          </h2>
          </div>
          <div class="arrow-up"></div>
      </aside>   
    
      </section>
        </nav>
       <img src="img/12.jpg" alt="Snow" style="width:100%">     
        <div class="tm-header">
          <div class="row tm-header-inner" style="margin-top: 100px">
            <div class="col-md-6 col-12">
              <div class="tm-site-text-box" >
            
              <img src="img/IconsWebAboutUsNews.png" alt="Logo" class="tm-site-logo"/> 
              
                <h1 class="tm-site-title">Network Congestion Analysis</h1>
                <h6 class="tm-site-description">Based on Different network</h6>  
              </div>
            </div>
            <nav class="col-md-6 col-12 tm-nav">
              <ul class="tm-nav-ul">
                <li class="tm-nav-li"><a href="home.php" class="tm-nav-link active">Home</a></li>
                <li class="tm-nav-li"><a href="about.php" class="tm-nav-link">About</a></li>
                <li class="tm-nav-li"><a href="contact.php" class="tm-nav-link">Contact</a></li>
              </ul>
            </nav>  
          </div>
        </div>
      </div>
    </div>

    <main>
      <header class="row tm-welcome-section" style="margin-left: 20%; margin-right: 20%" >
        <h2 class="col-12 text-center tm-section-title">Welcome to Network Analysis</h2>
        <p class="col-12 text-center">"Networking is an investment in your business. It takes time and when done correctly can yield great results for years to come." -- Diane Helbig</p>
      </header>
      <div style="margin-left: 4%">
       
           <button class="tablink" onclick="openPage('Home', this, 'green')">Network anamoly </button>
<button class="tablink" onclick="openPage('News', this, 'green')" id="defaultOpen">Packet loss Gallery</button>
<button class="tablink" onclick="openPage('Contact', this, 'green')">Cost Prediction </button>
</div>

<div id="Home" class="tabcontent">
  <figure>
            
            <aside>
              <img src="img/gallery/images6XI1VVVM.jpg" alt="Image" class="img-fluid tm-gallery-img" style="
              margin-top: 100px; height: 200px; width: 350px "/>
                          
                           </aside>
                            
                <h4 class="tm-gallery-title" style="margin-left:  450px; 
                color: black;margin-top: -200px; height: 10px">Anamoly detection</h4>
                <br>
                <p class="tm-gallery-description " style="margin-left: 10%;
                margin-right: 1; 
                color: cornflowerblue">
Anomaly detection is the process of finding outliers in the data set.Outliers are the data objects that stand out amongst other objects in the data set and do not conform to the normal behavior in a data set.</p> 
                            
        
            </figure>
                       <nav>
                       <br>
                        <br>
                        <form action="linegraph.php" style="margin-top: 0px; margin-left: 400px;">
  Select a file: <input type="file" name="myFile">
  <input type="submit">
</form>
</nav>
</div>
<!--
<aside>
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="img/gallery/images6XI1VVVM.jpg" style="width:50%">
  <img class="mySlides" src="img/gallery/malware-activity-network-anomaly-detection-showcase_image-7-w-494.jpg" style="width:50%">
  <img class="mySlides" src="img/gallery/Telecom-network-anomaly-detection-System.jpg" style="width:50%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

        </aside> -->

<div id="News" class="tabcontent">
  <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/packet-loss-featured.png" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/201706-switchrtc-packetloss.png" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/Causes-of-packet-loss-01-01-01-1024x427.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</div>

<div id="Contact" class="tabcontent" style="margin-left: 35%; ">
  <form name="calculator">
         <table>
            <tr>
               <td colspan="4">
                  <input type="text" name="display" id="display" disabled placeholder="Rupees" >
               </td>
            </tr>
            <tr>
               <td><input class="button" name="one" value="1" onclick="calculator.display.value += '1'" ></td>
               <td><input class="button" name="two" value="2" onclick="calculator.display.value += '2'" ></td>
               <td><input class="button" name="three" value="3" style="outline-offset: 0px;" onclick="calculator.display.value += '3'"></td>
               <td><input class="button" class="operator" name="plus" value="+" type= "button" onclick="calculator.display.value += '+'"></td>
            </tr>
            <tr>
               <td><input class="button" name="four" value="4" onclick="calculator.display.value += '4'"></td>
               <td><input class="button" name="five" value="5" onclick="calculator.display.value += '5'"></td>
               <td><input class="button" name="six" value="6" onclick="calculator.display.value += '6'"></td>
               <td><input class="button" class="operator" name="minus" value="-" type="button" onclick="calculator.display.value += '-'"></td>
            </tr>
            <tr>
               <td><input class="button" name="seven" value="7" onclick="calculator.display.value += '7'"></td>
               <td><input class="button" name="eight" value="8" onclick="calculator.display.value += '8'"></td>
               <td><input class="button" name="nine" value="9" onclick="calculator.display.value += '9'"></td>
               <td><input class="button" type="button" class="operator" name="times" value="x" onclick="calculator.display.value += '*'"></td>
            </tr>
            <tr>
               <td><input class="button" type="button" id="clear" name="clear" value="C" onclick="calculator.display.value = ''"></td>
               <td><input class="button" name="zero" value="0" type="button" onclick="calculator.display.value += '0'"></td>
               <td><input class="button" type="button" name="doit" value="=" onclick="calculator.display.value = eval(calculator.display.value)"></td>
               <td><input class="button" type="button" class="operator" name="div" value="/" onclick="calculator.display.value += '/'"></td>
            </tr>
         </table>
      </form>


<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>    
</div>      
    
    
    <footer class="tm-footer text-center" style="margin-top: -80px;"">
      <p> All rights reserved | Made By: Varsha Varshney,Muskan Varshney, Jyoti Gupta , Himanshu Sharma </p>
    </footer>
        

    </main>    
    </div>
</body>
</html>