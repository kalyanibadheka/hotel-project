<?php

// session_start();
// if(!isset($_SESSION['name'])){
// 	header('location:login-user.php');
// }
?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Resort </title>

	<!-- font css -->
	<link href="../css/fonts.css" rel="stylesheet" type="text/css"/>
		
	<!-- animate css -->
	<link href="../css/animate.min.css" rel="stylesheet" type="text/css"/>

	<!-- font awesome -->
	<link href="../css/all.min.css" rel="stylesheet" type="text/css"/>

    <!-- favicon icon -->
	<link href="../images/ficon.png" rel="icon" type="image/png"/>

	<!-- bootstrap css -->
	<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">

    <!-- stylesheet -->
    <link rel="stylesheet" href="../css/aboutus.css" type="text/css"/>

</head>
<body>
<header>
        <div class="topbar">	
            <div class="container">
                <div class="row">
                    <div class="logo">
                        <a href="index.php"><img src="../images/logo.png" alt="logo"/></a>
                    </div>
                    <div class="contact">
                        <ul>
                            <li>
                                <p><i class="far fa-clock"></i>09:00<span>AM</span> — 05:00<span>PM</span></p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-alt"></i><a href="tel:+91 323-913-4688">+91 323-913-4688</a></p>
                            </li>
                            <li>
                                <p><a href="../restro/index.php" class="call-btn">Visit Restaurant</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
		<div class="main-menu">
			<div class="container position-relative">
				<div class="row align-item-center justify-content-between">
					<div class="logo">
						<a href="../index.php"><img src="../images/logo.png" alt="logo"/></a>
					</div>
					<div class="toggle">
						<i class="fas fa-bars"></i>					
					</div>
					<nav>
						<div class="close">
							<ul>
								<li>
									<i class="fas fa-times close-btn"></i>
								</li>
							</ul>
						</div>
						<div class="social-icon">
							<ul>
								<li>
									<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li>
									<a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://www.google.com/"><i class="fab fa-google-plus-g"></i></a>
								</li>
								<li>
									<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
								</li>
	
							</ul>
						</div>
						<ul>
							<li>
								<a href="../index.php">home</a>
							</li>
							<li>
								<a href="aboutus.php">about us</a>
							</li>
							<li class="dropdown">
								<a href="rooms.php">rooms</a>
								
							</li>
							<li class="dropdown">
								<a href="gallery.php">gallery</a>
							
							</li>
							<li class="dropdown">
								<a href="events.php">events</a>
								
							</li>
							<li>
								<a href="contact-us.php">Contact Us</a>
							</li>

						</ul>
					</nav>
					<div class="toggle-btn">
						<i class="fas fa-bars"></i>
					</div>
					<div class="toggle-menu">
						<nav>
							<ul>

							<?php if( isset($_SESSION['email']) && !empty($_SESSION['email']) )
{
							?>
								
								<li>
									<a href="profile.php">My Profile</a>
								</li>	
								<li>
									<a href="logout-user.php">Log Out</a>
								</li>
								<?php } else { ?>		
								<li>
									<a href="contact-us.php">Login</a>
								</li>
								<li>
									<a href="logout-user.php">Register</a>
								</li>
								<?php } ?>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
        <!-- head slider -->
        <section class="slider">
            <div class="overlay">
            <div class="container">
                <div class="row">
                    <h2>About Us</h2>
                    <div class="indicate">
                        <p>Home</p>
                        <span>/</span>
                        <p> About Us</p>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- who we are -->
        <section class="whowe">
            <div class="container">
                <div class="row">
                    <div class="who-img">
                        <img src="../images/about-1.jpg" alt="card"/>
                    </div>
                    <div class="who-cont">
                        <div class="sec-title mb-33">
                            <div class="heading">
                                <h2 class="animate__animated animate__fadeInLeft">Who are we</h2>
                            </div>
                        </div>
                        <div class="para">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                            </p>
                        </div>
                        <div class="serv-list">
                            <ul>
                                <li>accommodation</li>
                                <li>Restaurant</li>
                                <li>Spa Salon</li>
                                <li>Conference Center</li>
                                <li>Room Service</li>
                                <li>Fitness Center</li>
                            </ul>
                        </div>
                        <div class="para">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget lacus aliquet, tempor justo sit amet, egestas dolor. Fusce viverra, nisl tristique interdum rutrum, risus massa aliquet sapien, a facilisis neque lorem et lectus. Vestibulum at orci rhoncus, vehicula purus nec.
                            </p>
                        </div>
                        <div class="sign">
                            <img src="../images/abt-sign.png" alt="sign">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fixed box -->
	<div class="fixbox">
		<i class="fas fa-angle-up"></i>
	</div>
    	<!-- offer -->
	<section class="py-100 offer">
		<div class="container">
			<div class="sec-title mb-33">
				<div class="heading">
					<h2 class="animate__animated animate__fadeInLeft">AMENITIES</h2>
				</div>
				<div class="sub-heading justify-content-center">
					<h4 class="animate__animated animate__fadeInDown">What We offer</h4>
					<div class="line-heading"></div>
				</div>
			</div>
			<div class="row">
				<div class="offer-box animate__animated animate__fadeInDown">
					<div class="sub-box">
						<div class="offer-box-content">
							<div class="box-icon">
								<i class="far fa-building"></i>
							</div>
							<div class="box-body">
								<h5>accommondation</h5>
								<p>Our rooms offer comfortable accommodation with free Wi-Fi, central heating etc.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="offer-box animate__animated animate__fadeInDown">
					<div class="sub-box">
						<div class="offer-box-content">
							<div class="box-icon">
								<i class="fas fa-concierge-bell"></i>
							</div>
							<div class="box-body">
								<h5>dining</h5>
								<p>Dine in style and at its finest in the Resort Restaurant that serves a wide range of tastes.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="offer-box animate__animated animate__fadeInDown">
					<div class="sub-box">
						<div class="offer-box-content">
							<div class="box-icon">
								<i class="fas fa-leaf"></i>
							</div>
							<div class="box-body">
								<h5>spa & massage</h5>
								<p>Visit the Resort Spa & Massage Salon to indulge yourself with unique relaxing atmosphere.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="offer-box animate__animated animate__fadeInUp">
					<div class="sub-box">
						<div class="offer-box-content">
							<div class="box-icon">
								<i class="far fa-user"></i>
							</div>
							<div class="box-body">
								<h5>Concierge Services</h5>
								<p>Our concierge will be pleased to arrange airline transfers, dinner reservations, and more.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="offer-box animate__animated animate__fadeInUp">
					<div class="sub-box">
						<div class="offer-box-content">
							<div class="box-icon">
								<i class="fas fa-broom"></i>
							</div>
							<div class="box-body">
								<h5>room service</h5>
								<p>Room service is available around the clock, including breakfast deliveries.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="offer-box animate__animated animate__fadeInUp">
					<div class="sub-box">
						<div class="offer-box-content">
							<div class="box-icon">
								<i class="far fa-star"></i>
							</div>
							<div class="box-body">
								<h5>Business Center</h5>
								<p>Our business center offers two well-appointed meeting rooms and a privately equipped office.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- footer -->
	<footer>
		<div class="bottom-bar">
		<div class="container">
			<div class="row justify-content-between">
				<div class="bottom-box bottom-contact animate__animated animate__slideInRight">
					<h5>our contacts</h5>
					<div class="contact-box">
						<ul>
							<li>
								<div class="contact-detail">
									<div class="contact-left">
										<i class="fas fa-phone-alt"></i>
									</div>
									<div class="contact-right">
										<p><a href="tel:+1 323-913-4688">+1 323-913-4688</a></p>
									</div>
								</div>
							</li>
							<li>
								<div class="contact-detail">
									<div class="contact-left">
										<i class="far fa-envelope"></i>
									</div>
									<div class="contact-right">
										<p><a href="mailto:info@demolink.org">info@demolink.org</a></p>
									</div>
								</div>
							</li>
							<li>
								<div class="contact-detail">
									<div class="contact-left">
										<i class="fas fa-location-arrow"></i>
									</div>
									<div class="contact-right">
										<p><a href="#">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="bottom-box animate__animated animate__slideInDown">
					<h5>popular news</h5>
					<div class="news-box">
						<p><a href="#">5 Facilities Every Hotel Should Have</a></p>
						<span>May 04, 2019</span>
					</div>
					<div class="news-box">
						<p><a href="#">Making the Most of Your Stay at Resort Hotel</a></p>
						<span>May 04, 2019</span>
					</div>
				</div>
				<div class="bottom-box navigation animate__animated animate__slideInLeft">
					<h5>navigation</h5>
					<ul>
						<li><a href="#">about us</a></li>
						<li><a href="#">our team</a></li>
						<li><a href="#">rooms</a></li>
						<li><a href="#">blog</a></li>
						<li><a href="#">gallery</a></li>
					</ul>
					<a href="#" class="btn">get in touch</a>
				</div>
			</div>
		</div>
		<div class="policy">
			<div class="container">
				<div class="row align-item-center justify-content-between">
					<div class="policy-box">
						<p>© 2021 Resort. All rights reserved</p>
					</div>
					<div class="policy-box">
						<ul>
							<li><i class="fab fa-facebook-f"></i></li>
							<li><i class="fab fa-twitter"></i></li>
							<li><i class="fab fa-google-plus-g"></i></li>
							<li><i class="fab fa-instagram"></i></li>
						</ul>
					</div>
					<div class="policy-box">
						<span><a href="#">Privacy Policy</a></span>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(window).scroll(function(){
				if($(this).scrollTop()){
					$(".fixbox").css("opacity","1");
				}
				else{
					$(".fixbox").css("opacity","0");
				}
			});
			$(".fixbox").click(function(){
				$("html,body").animate({
					scrollTop:0
				}, 1000);
			});
            $(window).scroll(function(){
				if($(this).scrollTop() >= 100){
					$(".main-menu").addClass("sticky");
				}
				else{
					$(".main-menu").removeClass("sticky");
				}
			});
			$(".close-btn").click(function(){
				$(".main-menu nav").slideUp(1000);
			});
			$(".toggle-btn").click(function(){
				$(".toggle-menu").slideToggle("slow");
				$(".toggle-menu").css("display","block");
			});
        });
    </script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery-2.1.1.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
</body>
</html>