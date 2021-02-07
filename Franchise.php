<?php
include "connect.php";

if (isset($_POST['submit'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];


	$q="INSERT INTO `tb_form`(`id`, `fname`, `lname`, `email`, `phone`) VALUES ('','$fname','$lname','$email','$phone')";

	$qc=mysqli_query($conn,$q);
	 header('location:formread.php');
}
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>chaha.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">

	<link rel="stylesheet" href="css/style.css">
	<base href="" target="_blank">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<nav id="colorlib-main-nav" role="navigation">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
		<div class="js-fullheight colorlib-table">
			<div class="colorlib-table-cell js-fullheight">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="form-group">
							<input type="text" class="form-control" id="search" placeholder="Enter any key to search...">
							<button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="Menu.php">Menus</a></li>
							<li><a href="Specialties.php">Specialties</a></li>
							<li class="active"><a href="Franchise.php">Franchise</a></li>
							<li><a href="about.php">About us</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	
	<div id="colorlib-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<a  href="index.php">
								<img src="img/logo.png" height="90" width="50%">
							</a>
						</div>
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
		</header>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(img/b1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
				   						<span class="icon"></span>
					   					<h1>Franchise</h1>
					   					<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
					   					
					   					<div class="desc2"></div>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			</ul>
			  	<div class="mouse">
				   <a href="#" class="mouse-icon">
				   	<div class="mouse-wheel"></div>
				   </a>
				</div>
		  	</div>
		</aside>

		<div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-map4"></i>
							</span>
							<h2>Address</h2>
							<p>Shop. No 1, Poonam Appt, Nandanvanam Main Rd, Nagpur, Maharashtra (440009)</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-clock4"></i>
							</span>
							<h2>Opening Time</h2>
							<p>Monday - Sunday</p>
							<span>6am - 10pm</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-mobile2"></i>
							</span>
							<h2>Phone</h2>
							<p>+91 9923183018</p>
							<p>+91 8626086940/9370929023</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-envelope"></i>
							</span>
							<h2>Email</h2>
							<p><a href="#">rahul_rr24@rediffmail.com</a><br><a href="#">amoldhopte@gmail.com</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="goto-here"></div>

		<div id="Franchise" class="colorlib-reservation reservation-img" style="background-image: url(img/a1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
						<h2>Take A Franchise</h2>
						<!-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p> -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="row">
							<div class="col-md-12">
								<form method="post" class="colorlib-form">
				              	<div class="row">
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="fname">First Name</label>
												<div class="form-field">
													<input type="text" name="fname" class="form-control" placeholder="first name">
												</div>
											</div>
										</div>
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="lname">Last Name</label>
												<div class="form-field">
													<input type="text" name="lname" class="form-control" placeholder="last name">
												</div>
											</div>
										</div>
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="email">Email</label>
												<div class="form-field">
													<input type="Email" name="email" class="form-control" placeholder="email">
												</div>
											</div>
										</div>
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="phone">phone</label>
												<div class="form-field">
													<i class="icon "></i>

													<input type="phone" id="phone" name="phone" class="form-control phone" placeholder="phone">
												</div>
											</div>
										</div>
										
										<div class="col-md-12 animate-box">
											<div class="row">
												<div class="col-md-4 col-md-offset-4">
													<a href="index.php">
													<input type="submit" name="submit" id="submit" value="Take A Franchise" class="btn btn-primary btn-block"></a>
												</div>
											</div>
										</div>
									</div>
				            </form>
			           	</div>
						</div>
					</div>
				</div>
			</div>
		</div>




		<div id="map" class="colorlib-map"></div>

		


		<footer style="margin-top: -270px;">
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-pb-sm">
							<h2>चहा .com</h2>
							<p>"मैत्रीची एकच जागा" <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; जिथे सगळे मित्र भेटतील .... अगदी ते लहान असो वा मोठे , मुलगा असो वा मुलगी , आजी असो वा आजोबा सर्वांना आवडेल अशी छोटीसी पण सुंदर जागा ......<br>चहा .com</p>
							<p class="colorlib-social-icons">
								<a href="#"><i class="icon-facebook4"></i></a>
								<a href="#"><i class="icon-twitter3"></i></a>
								<a href="#"><i class="icon-googleplus"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
							</p>
						</div>
						<div class="col-md-3 col-pb-sm">
							<h2>Address</h2>
							 <span class="icon">
										<i class="icon-map4"></i>
									</span>
							<div class="intro animate-box">
									
									<p>Shop. No 1, Poonam Appt, Nandanvanam Main Rd, Nagpur, Maharashtra (440009)</p>
							</div>
							
						</div>
						<div class="col-md-3 col-pb-sm">
							<h2>Instagram</h2>
							<div class="instagram">
								<a href="https://www.instagram.com/chaha.com1/" class="insta-img" style="background-image: url(img/i1.jpg);"></a>
								<a href="https://www.instagram.com/chaha.com1/" class="insta-img" style="background-image: url(img/i2.jpg);"></a>
								<a href="https://www.instagram.com/chaha.com1/" class="insta-img" style="background-image: url(img/i3.jpg);"></a>
								<a href="https://www.instagram.com/chaha.com1/" class="insta-img" style="background-image: url(img/i4.jpg);"></a>
							</div>
						</div>
						<div class="col-md-3 col-pb-sm">
							<h2>Newsletter</h2>
							<p>For a notification</p>
							<div class="subscribe text-center">
								<div class="form-group">
									<input type="text" class="form-control text-center" placeholder="Enter Email address">
									<input type="submit" value="Subscribe" class="btn btn-primary btn-custom">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center" >
							<p>
								<span class="block">&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="icon-heart" aria-hidden="true"></i></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><br></span> 
								<!-- <span class="block">Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a> &amp; <a href="https://www.pexels.com/" target="_blank">Pexel</a></span> -->
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>



