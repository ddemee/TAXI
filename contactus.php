<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$number = $_POST["number"];
	$content = $_POST["content"];

	$toEmail = "admin@phppot_samples.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $number, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>Global Taxi</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">	
        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/6de6aa5275.js" crossorigin="anonymous"></script> 
        <!-- Reset CSS -->
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="img/CARDS/global.png" type="image/gif" />
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <!-- owl stylesheets --> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        
    </head>
<body>
    <!-- HEADER -->
    <header id="header">
        <div class="container">
          <div class="language-menu">
            <ul class="language-bar">
              <li><a href="index.html">GER</a></li>
              <li><a class="active" href="indexeng.html">ENG</a></li>
              <li><a href="#">RUS</a></li>
             </ul>
          </div>
            <nav>
                    <a class="logo" href="indexeng.html">Global Taxi</a>
                <ul class="nav-links">
                    <li><a href="indexeng.html">HOME</a></li>
                    <li>
                      <div class="dropdown">
                        <button class="dropbtn">service</button>
                        <div class="dropdown-content">
                          <a href="taxifareeng.html"> Taxi fare </a>
                          <a href="taxiserviceeng.html">TAXI SERVICE</a>
                          <a href="promobileeng.html">PROMOBILE</a>
                          <a href="couriereng.html">EXPRESS courier</a>
                          <a href="businesseng.html">business</a>
                          <a href="tandemtaxieng.html">Tandem taxi</a>
                        </div>
                      </div>
                    </li>
                    <li><a href="booking.html">BOOKING</a></li>
                    <li><a href="contactuseng.html"> Kontakt </a></li>
                </ul>
                <div class="navbar">
                  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fas fa-bars burgerbar"></i></button>
  
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                  <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel"></h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <li><a href="indexeng.html">HOME</a></li>
                    <li><a href="booking.html">BOOKING</a></li>
                    <li><a href="contactuseng.html">CONTACT US</a></li>
                  </div>
                </div>
                </div>
            </nav>
        </div>
    </header>
     <!-- contact us  -->
     <section id="contactus">
        <div class="container">
          
  
   
        <div class="jumbotron text-center">
			<h1 class="display-3">Thank You!</h1>
			<p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
			<hr>
			<p>
				Having trouble? <a href="">Contact us</a>
			</p>
			<p class="lead">
				<a class="btn btn-primary btn-sm" href="https://bootstrapcreative.com/" role="button">Continue to homepage</a>
			</p>
		</div>
        </div>
      </section>
    <!-- FOOTER -->
    <footer id="footer">
      <div class="section_footer ">
        <div class="container"> 
            <div class="footer_section_2">
              <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <h2 class="account_text">Address</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10800.87004762184!2d8.3950742!3d47.4076984!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7398ae77891b250a!2sGLOBAL%20TAXI!5e0!3m2!1sen!2sge!4v1634218541117!5m2!1sen!2sge"  width="100%" height="100" style="border:0; margin-bottom:20px ;" allowfullscreen="" loading="lazy"></iframe>
                    <p class="ipsum_text"> <i class="fas fa-map-marked-alt"></i><a href="https://goo.gl/maps/4T52n3y4raGKZWBM9"> Kreuzstrasse 7, 8953 Dietikon, Switzerland</a> </p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <h2 class="account_text">Links</h2>
                    <div class="image-icon"><img src="img/bulit-icon.png"><span class="fb_text"><a href="#header">Home</span></a></div>
                    <div class="image-icon"><img src="img/bulit-icon.png"><span class="fb_text"><a href="#cars">Cars</span></a></div>
                    <div class="image-icon"><img src="img/bulit-icon.png"><span class="fb_text"><a href="#info">About</span></a></div>
                    <div class="image-icon"><img src="img/bulit-icon.png"><span class="fb_text"><a href="#">Booking</span></a></div>
                    <div class="image-icon"><img src="img/bulit-icon.png"><span class="fb_text"><a href="#contactus">Contact Us</span></a></div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <h2 class="account_text">Follow Us</h2>
                    <div class="image-icon"><img src="img/fb-icon.png"><span class="fb_text"><a href="#">Facebook</a></span></div>
                    <div class="image-icon"><img src="img/twitter-icon.png"><span class="fb_text"><a href="#">Twitter</a></span></div>
                    <div class="image-icon"><img src="img/in-icon.png"><span class="fb_text"><a href="#">Linkedin</a></span></div>
                    <div class="image-icon"><img src="img/youtube-icon.png"><span class="fb_text"><a href="#">Youtube</a></span></div>            
                    <div class="image-icon"><img src="img/instagram-icon.png"><span class="fb_text"><a href="#">Instagram</a></span></div>
                  </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
              <h2 class="adderess_text">Contact Now</h2>
              <div class="address-col">
                <ul>
                  <li><a href="tel:+044 741 11 11"><i class="fas fa-phone-alt"></i>044 741 11 11</a></li>
                  <li><a href='https://wa.me/0447411111' target='_blank'><i class="fab fa-whatsapp-square"></i></i> 044 741 11 11</a></li>
                  <li><a href="mailto:"> <i class="fas fa-envelope"></i>globaltaxi.ch@gmail.com</a></li>
                </ul>
              </div>
            </div>
            </div>
            </div>
            </div>
        </div>
      </div>

    </footer>


    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>
</html>