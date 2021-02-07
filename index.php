
<?php
include "connect.php";

if (isset($_POST['submit'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];


	$q="INSERT INTO `tb_form`(`id`, `fname`, `lname`, `email`, `phone`) VALUES ('','$fname','$lname','$email','$phone')";

	$qc=mysqli_query($conn,$q);
	 header('location:index.php');
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
	<!-- <base href="" target="_blank"> -->


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
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="Menu.php">Menus</a></li>
							<li><a href="Specialties.php">Specialties</a></li>
							<li><a href="Franchise.php">Franchise</a></li>
							<li><a href="About.php">About us</a></li>
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
					   					<h1>Tea Is The Answer To Most Problems</h1>
					   					<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
					   					
					   					<div class="desc2"></div>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(img/b6.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
				   						<span class="icon"></span>
					   					<h1>It's Time For Tea</h1>
					   					<p>Life is like a cup of tea to the filled the brim and enjoyed with friends.</p>
					   					
					   					<div class="desc2"></div>
					   				</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(img/b9.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
				   						<span class="icon"></span>
					   					<h1>A Cup Of Tea Makes Everything Better</h1>
					   					<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
					   					
					   					<div class="desc2"></div>
					   				</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(img/b10.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
				   						<span class="icon"></span>
					   					<h1>A Cup Of Tea Is An Excuse To Share Thoughts With Great Mind.</h1>
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

		<div class="colorlib-about" class="colorlib-light-grey" id="About">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="row">
							<div class="about-desc">
								<div class="col-md-12 col-md-offset-0 animate-box intro-heading">
									<!-- <span>Welcome to चहा .com</span> -->
									<h2>Story Of चहा .com </h2>
								</div>
								<div class="col-md-12 animate-box" style="margin-top: -50px; margin-bottom: -170px;">
									<p>चहा .कॉम ची साधी सरळ कथा.........

 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;अगदी साधी आणि सरळ ....जशी घडली तशी तुम्हाला सांगतो आहे ...<br>

दोन मित्र, एक लहान आणि दुसरा मोठा त्यामुळे लहान ...मोठ्याला दादा म्हणायचा. दादा खाजगी नौकरी करत होता आणि लहान इंजिनीरिंग करून जॉब साठी प्रयत्न करत होता. पण दोघांच्या मनात एकच विचार होता, काहीतरी आपले करायचे , पण काय आणि कसे हे काही समजत नव्हते. कारण उद्योग म्हंटले कि पैसा आलाच आणि गाडी इथेच थांबत होती शेवटी मराठी माणूस म्हणजे भित्रा हे जग जाहीरच आहेच. पण मग एक दिवस ठरवले कि सुरवात तर करू, यश अपयश नंतर बघू , आपल्यातलं मराठी माणूस सिद्ध करू , कमीतकमी काही करून अपयश आले.... तर ही खंत तर राहणार नाही ना... कि आपण प्रयत्नच केला नाही . या सर्व्या घडामोडीतून शेवटी निर्णय घेतला कि आता करायचेच . मग लहान मित्राने सुचवलेला उद्योग सुरु करायचे ठरले.<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;सुरुवात करतांना वाटले पण नाही कि इतक्या संकटांना तोंड द्यावे लागेल , कसे बसे कर्ज काढून पैसे जमवले तेही नेमकेच होते पण मित्रांनो याच कमी पैश्याने आम्हाला शिकवले कि आजकाल विश्वास , माणुसकी या सगळ्या पेक्षा पैसा मोठा आहे पण त्याहून मोठी आमची मैत्री आहे. त्या सर्व उभयतांना आम्ही धन्यवाद देतो, ज्यांनी आम्हाला खूप त्रास दिला पण नकळत आम्हाला शिकवले कि पुढे कसे जगायचे . पण खरी संकटे तर तेव्हा आली जेव्हा काम सुरु केले, साधे दुकान किरायाने घेण्यापासून तर घराचे इलेक्ट्रिक मीटर , फर्निचर, पेंटिंग , सजावट अगदी पिण्याच्या पाण्या पर्यंत हजारो संकटे आली. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;अश्या किती वेळा आल्या, की कधी लहान मित्र तर कधी दादा अगदी सगळे सोडून द्यायच्या तयारीला लागले होते पण ती त्यांची मैत्रीच होती ...ज्यामुळे ते एकमेकांना सांभाळत... समजावत इथं पर्यंत पोहचले आणि हे एक छोटेसे स्वप्न पूर्ण करू शकले . तेव्हाच ठरवले कि या मैत्रीमुळे हे शक्य झाले आहे तर मग आपले हे स्वप्नपण आपण मैत्रीलाच समर्पित करू आणि म्हणूनच आमची टॅग लाईन आहे.<br>
 "मैत्रीची एकच जागा" <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; जिथे सगळे मित्र भेटतील .... अगदी ते लहान असो वा मोठे , मुलगा असो वा मुलगी , आजी असो वा आजोबा सर्वांना आवडेल अशी छोटीसी पण सुंदर जागा ......

 

चहा .कॉम <br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;मैत्रीची एकच जागा ..........</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-6 animate-box">
								<div class="about-img" style="background-image: url(img/p3.jpg);">
								</div>
							</div>
							<div class="col-md-6 animate-box">
								<div class="about-img about-img-2" style="background-image: url(img/p1.jpg);">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 animate-box">
								<div class="about-img" style="background-image: url(img/a1.jpg);">
								</div>
							</div>
							<div class="col-md-6 animate-box">
								<div class="about-img about-img-2" style="background-image: url(img/p2.jpg);">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="colorlib-menu" style="margin-top: -100px;" >
			<div class="container" >
				<div class="row" id="Specialties">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading" >
						<span class="icon"></span>
						<h2>Our Delicious Specialties</h2>
						<p style="font-size: 20px;">Life is like making tea! Boil your ego,Evoporate your worries,Dilute your sarrows, Filter your misteks & teste of happiness...</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(img/ms.jpg);"></div>
								<div class="desc">
									<h2><a href="#">खास मित्रांसाठी मसाला चहा</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(img/black.jpg);"></div>
								<div class="desc">
									<h2><a href="#">गहिरी दोस्ती Black Tea</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(img/Lemon.jpg);"></div>
								<div class="desc">
									<h2><a href="#">Flavot  दोस्ती (Lemon Tea)</a></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="colorlib-introduction" style="background-image: url(img/a3.jpg); margin-bottom: 50px;" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-md-push-3">
						<div class="intro-box animate-box">
							<h2><a href="#"></a>Foods you love to taste</h2>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
 -->
		

		<div class="colorlib-testimony" style="background-image: url(img/a1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
						<h2>Our Customer Says</h2>
					</div>
				</div>
				<div class="row animate-box">
					<div class="owl-carousel">
						<div class="item">
							<div class="col-md-8 col-md-offset-2 text-center">
								<div class="testimony">
									<blockquote>
										<p style="font-size: 20px;">"chai break at work are usually the highlight of my day, Tea was Awesome & Testy.</p>
										<span>" &mdash; Palash More</span>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-md-8 col-md-offset-2 text-center">
								<div class="testimony">
									<blockquote>
										<p>"Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
										<span>" &mdash; Daniel Foster</span>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-md-8 col-md-offset-2 text-center">
								<div class="testimony">
									<blockquote>
										<p>"When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove</p>
										<span>" &mdash; Liam Jenkins</span>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-menu" id="Menu">
			<div class="container">
				<div class="colorlib-menu-2">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
							<span class="icon"><img src="images/banner.png" style="height: 50px;"></span>
							<h2>चहा .com Menu</h2>
							<p style="font-size: 20px;">Chai break at work are usually the highlight of my day.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<div class="row">
								<div class="col-md-12 text-center">
									<ul class="nav nav-tabs text-center" role="tablist">
										<li role="presentation" class="active"><a href="#main" aria-controls="mains" role="tab" data-toggle="tab">Main</a></li>
										<li role="presentation"><a href="#Sandwiches" aria-controls="Sandwiches" role="tab" data-toggle="tab">Sandwiches</a></li>
										<li role="presentation"><a href="#Maggi" aria-controls="Maggi" role="tab" data-toggle="tab">Maggi &amp; Egg Item</a></li>
										<li role="presentation"><a href="#Other" aria-controls="Other" role="tab" data-toggle="tab">Other Items</a></li>
									</ul>
								</div>
							</div>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="main">
									<div class="row">
										<div class="col-md-6">
											<ul class="menu-dish">
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(img/ms.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">10</span>
							                  <h3 style="margin-top: 25px;"> खास मित्रांसाठी मसाला चहा</h3>
							                  <!-- <p class="cat">Meat / Potatoes / Rice / Tomatoe</p> -->
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(img/Black.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">10</span>
							                  <h3 style="margin-top: 25px;">गहिरी दोस्ती Black Tea</h3>
							                 
							                </div>
							              </li>
							              
							            </ul>
										</div>

										<!-- 2nd Column -->
										<div class="col-md-6">
											<ul class="menu-dish">
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(img/Lemon.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">10</span>
							                  <h3 style="margin-top: 25px;">Flavot  दोस्ती (Lemon Tea)</h3>
							                  <!-- <p class="cat">Meat / Potatoes / Rice / Tomatoe</p> -->
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(img/co.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">20</span>
							                  <h3 style="margin-top: 25px;"> कडक Coffee</h3>
							                  <!-- <p class="cat">Tuna / Potatoes / Rice</p> -->
							                </div>
							              </li>
							              
							            </ul>
										</div>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane" id="Sandwiches">
									<div class="row">
										<div class="col-md-6">
											<ul class="menu-dish">
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(img/veg.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">40</span>
							                  <h3 style="margin-top: 25px;">Veg Griiled-Sandwich</h3>
							                  <!-- <p class="cat">Meat / Potatoes / Rice / Tomatoe</p> -->
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(img/panner.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">50</span>
							                  <h3 style="margin-top: 25px;">Panner-Veg Grilled-Sandwich</h3>
							                  <!-- <p class="cat">Tuna / Potatoes / Rice</p> -->
							                </div>
							              </li>
							               
							            </ul>
										</div>
										<div class="col-md-6">
											<ul class="menu-dish">
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(img/butter.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">15</span>
							                  <h3 style="margin-top: 25px;">Bread Butter</h3>
							                  <!-- <p class="cat">Meat / Potatoes / Rice / Tomatoe</p> -->
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(img/jam.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">15</span>
							                  <h3 style="margin-top: 25px;">Jam Bread</h3>
							                  <!-- <p class="cat">Sugar / Dough / Rice</p> -->
							                </div>
							              </li>
							               
							               
							            </ul>
										</div>
									</div>
								</div>


								<div role="tabpanel" class="tab-pane" id="Maggi">
									<div class="row">
										<div class="col-md-6">
											<ul class="menu-dish">
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(img/simple.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">30</span>
							                  <h3 style="margin-top: 25px;">Simple Maggi</h3>
							                  <!-- <p class="cat">Meat / Potatoes / Rice / Tomatoe</p> -->
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(img/masala.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">50</span>
							                  <h3 style="margin-top: 25px;">Masala Maggi</h3>
							                  <!-- <p class="cat">Tuna / Potatoes / Rice</p> -->
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(img/eggmaggi.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">60</span>
							                  <h3 style="margin-top: 25px;">Egg Maggi</h3>
							                  <!-- <p class="cat">Tuna / Potatoes / Rice</p> -->
							                </div>
							              </li>

							              </ul>
										</div>
										<div class="col-md-6">
											<ul class="menu-dish">
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(img/eomlet.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">30</span>
							                  <h3 style="margin-top: 25px;">Egg Omelet</h3>
							                  <!-- <p class="cat">Meat / Potatoes / Rice / Tomatoe</p> -->
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(img/bromelet.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">50</span>
							                  <h3 style="margin-top: 25px;">Bread Omelet</h3>
							                  <!-- <p class="cat">Tuna / Potatoes / Rice</p> -->
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(img/friedegg.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">30</span>
							                  <h3 style="margin-top: 25px;">Fried Boil Egg</h3>
							                  <!-- <p class="cat">Tuna / Potatoes / Rice</p> -->
							                </div>
							              </li>
							              </ul>
										</div>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane" id="Other">
									<div class="row">
										<div class="col-md-6">
											<ul class="menu-dish">
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(img/cookies.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">15</span>
							                  <h3 style="margin-top: 25px;">Cookies (4 pieces)</h3>
							                  <!-- <p class="cat">Meat / Potatoes / Rice / Tomatoe</p> -->
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(img/donates.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">10</span>
							                  <h3 style="margin-top: 25px;">Donates</h3>
							                  <!-- <p class="cat">Tuna / Potatoes / Rice</p> -->
							                </div>
							              </li>
							              
							            </ul>
										</div>
										<div class="col-md-6">
											<ul class="menu-dish">
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(img/biscuits.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">10</span>
							                  <h3 style="margin-top: 25px;">Biscuits</h3>
							                  <!-- <p class="cat">Meat / Potatoes / Rice / Tomatoe</p> -->
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(img/milk.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">15</span>
							                  <h3 style="margin-top: 25px;">Bornvita Milk</h3>
							                  <!-- <p class="cat">Tuna / Potatoes / Rice</p> -->
							                </div>
							              </li>
							              
							            </ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<div id="Franchise" class="colorlib-reservation reservation-img" style="background-image: url(img/a1.jpg); mar" data-stellar-background-ratio="0.5">
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

													<input type="phone" name="phone" id="date" class="form-control" placeholder="phone">
												</div>
											</div>
										</div>
										
										<div class="col-md-12 animate-box">
											<div class="row">
												<div class="col-md-4 col-md-offset-4">
													
													<input type="submit" name="submit" id="submit" value="Take A Franchise" class="btn btn-primary btn-block">
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

		<footer>
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


