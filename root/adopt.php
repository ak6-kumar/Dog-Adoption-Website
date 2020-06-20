<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dog adoption-Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a class="mr-2"><span class="fa fa-phone mr-1"></span> +91 8008280281</a> 
							<a><span class="fa fa-paper-plane mr-1"></span> akshaykr@gmail.com</a>
							<a><span class="fa fa-paper-plane mr-1"></span> amankr@gmail.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a href="http://facebook.com" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="http://twitter.com" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="http://instagram.com" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="http://dribbble.com" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.php"><span class="flaticon-pawprint-1 mr-2"></span>Dog Adoption</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="adopt.php" class="nav-link">Adopt</a></li>
                <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
    </nav>
    

    <div style="margin-left:50px; margin-top:50px">
	<?php
    include "conn.php";
    ?>
    <form action='display.php'>
        <p><strong>Enter a Breed</strong></p>
        <select id="contactForm" name="Breed" selected="Breed" required="required">
                    <option value="" selected disabled hidden>Choose a Breed</option>
                    <option value="German Shepherd">German Shepherd</option>
                    <option value="Labrador Retriever">Labrador Retriever</option>
                    <option value="Golden Retriever">Golden Retriever</option>
                    <option value="Pug">Pug</option>
                    <option value="Samoyed">Samoyed</option>
                    <option value="Dachshund">Dachshund</option>
                    <option value="Corgi">Corgi</option>
                    <option value="Husky">Husky</option>
                    <option value="Dobermann">Dobermann</option>
                  </select>
        <br>
        <br>
        <p><strong>Enter a Gender</strong></p>
        <select name="Gender" required="required">
        <option value="" selected disabled hidden>Choose a Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select>
        <br>
        <br>
        <p><strong>Enter a State</strong></p>
        <input type="text" name="Location" placeholder="State" required>
        <br>
        <br>
        <label for="Colour">Colour:</label>
  <br>
        <select name="Colour" required="required">
        <option value="" selected disabled hidden>Choose a Colour</option>
        <option value="Golden">Golden</option>
                    <option value="White">White</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Black">Black</option>
                    <option value="Brown">Brown</option>
        </select>
        <br>
        <br>
        <button type="submit" class='btn btn-primary'>Submit</button>
    </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="ftco-counter" id="section-counter">
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="5231">0</strong>
              </div>
              <div class="text">
              	<span>Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="8312">0</strong>
              </div>
              <div class="text">
              	<span>Successfull adoptions</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="7">0</strong>
              </div>
              <div class="text">
              	<span>Countries</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="84">0</strong>
              </div>
              <div class="text">
              	<span>Branches</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


    
  </body>
</html>