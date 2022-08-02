<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Resort</title>
	<!-- font css -->
	<link href="css/fonts.css" rel="stylesheet" type="text/css"/>
		
	<!-- animate css -->
	<link href="css/animate.min.css" rel="stylesheet" type="text/css"/>

	<!-- font awesome -->
	<link href="css/all.min.css" rel="stylesheet" type="text/css"/>

    <!-- favicon icon --> 
	<link href="images/ficon.png" rel="icon" type="image/png"/>

	<!-- owl carousel css -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- stylesheet -->
    <link rel="stylesheet" href="css/style.css" type="text/css"/>

</head>
<body>
	<!-- loader -->
	<div class="box">
        <div class="ring1"></div>
        <div class="ring2"></div>
    </div>
	<!-- loader end -->
	<!-- nav bar -->
    <header>
        <div class="topbar">	
            <div class="container">
                <div class="row">
                    <div class="logo">
                        <a href="index.php"><img src="images/logo.png" alt="logo"/></a>
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
                                <p><a href="restro/index.php" class="call-btn">Visit Restaurant</a></p>
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
						<a href="index.php"><img src="images/logo.png" alt="logo"/></a>
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
								<a href="index.php">home</a>
							</li>
							<li>
								<a href="pages/aboutus.php">about us</a>
							</li>
							<li class="dropdown">
								<a href="pages/rooms.php">rooms</a>
								
							</li>
							<li class="dropdown">
								<a href="pages/gallery.php">gallery</a>
							
							</li>
							<li class="dropdown">
								<a href="pages/events.php">events</a>
								
							</li>
							<li>
								<a href="pages/contact-us.php">Contact Us</a>
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
									<a href="pages/profile.php">My Profile</a>
								</li>	
								<li>
									<a href="pages/logout-user.php">Log Out</a>
								</li>
								<?php } else { ?>		
								<li>
									<a href="pages/contact-us.php">Login</a>
								</li>
								<li>
									<a href="pages/logout-user.php">Register</a>
								</li>
								<?php } ?>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- slider -->
	<section class="sec-bg">
		<div class="fadeOut owl-carousel owl-theme">
            <div class="item">
				<img src="images/s1.jpg" alt="slider"/>
				<div class="dis-head">
					<h6 class="animate__animated animate__fadeInLeft">Welcome to resort hotel </h6>
					<h1 class="animate__animated animate__fadeInDown">You don't just stay here, you <span>enjoy your stay</span></h1>
					<a href="pages\sign-user.php" class="btn animate__animated animate__fadeInRight">BOOK NOW</a>
				</div>
            </div>
            <div class="item">
				<img src="images/s2.jpg" alt="slider"/>
				<div class="dis-head">
					<h6 class="animate__animated animate__fadeInLeft">Welcome to resort hotel <?php echo $_SESSION['name'];?> </h6>
					<h1 class="animate__animated animate__fadeInDown">You don't just stay here, you <span>enjoy your stay</span></h1>
					<a href="pages\sign-user.php" class="btn animate__animated animate__fadeInRight">BOOK NOW</a>
				</div>										
            </div>
            <div class="item">
				<img src="images/s3.jpg" alt="slider"/>
				<div class="dis-head">
					<h6 class="animate__animated animate__fadeInLeft">Welcome to resort hotel</h6>
					<h1 class="animate__animated animate__fadeInDown">You don't just stay here, you <span>enjoy your stay</span></h1>
					<a href="/pages/sign-user.php" class="btn animate__animated animate__fadeInRight">BOOK NOW</a>
				</div>
            </div>
        </div>
	</section>
		<!-- <div class="container">
			<div class="row justify-content-center">
				<div class="dis-head">
					<h6 class="animate__animated animate__fadeInLeft">Welcome to resort hotel</h6>
					<h1 class="animate__animated animate__fadeInDown">You don't just stay here, you <span>enjoy your stay</span></h1>
					<a href="#" class="btn animate__animated animate__fadeInRight">BOOK NOW</a>
				</div>
			</div>
		</div> -->
	</section>
	<!-- fixed box -->
	<div class="fixbox">
		<i class="fas fa-angle-up"></i>
	</div>
	<!-- our rooms -->
	<section class="py-100 room">
		<div class="container">
			<div class="sec-title mb-33">
				<div class="heading">
					<h2 class="animate__animated animate__fadeInLeft">our rooms</h2>
				</div>
				<div class="sub-heading justify-content-center">
					<h4 class="animate__animated animate__fadeInDown">COMFORTABLE ACCOMMODATION</h4>
					<div class="line-heading">
					</div>
					<div class="slide-btn">
						<i class="fas fa-angle-left nav-btn"></i>
						<i class="fas fa-angle-right nav-btn"></i>
					</div>
				</div>
			</div>
			<div class="row justify-content-between">
				<div class="service-box">
					<div class="service-img">
						<img src="images/i1.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="#">double room</a></h5>
						<div class="service-price">
							<span>15000</span>
							/night
						</div>
					</div>
				</div>
				<div class="service-box">
					<div class="service-img">
						<img src="images/i2.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="#">executive room</a></h5>
						<div class="service-price">
							<span>20000</span>
							/night
						</div>
					</div>
				</div>
				<div class="service-box">
					<div class="service-img">
						<img src="images/i3.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="#">vip suite</a></h5>
						<div class="service-price">
							<span>25000</span>
							/night
						</div>
					</div>
				</div>
				<div class="service-box">
					<div class="service-img">
						<img src="images/i4.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="#">single room</a></h5>
						<div class="service-price">
							<span>10000</span>
							/night
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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
	<!-- book room -->
	<section class="form-bg py-100">
		<div class="container">
			<div class="row justify-content-end">
				<div class="contact-form  animate__animated animate__fadeInLeft">
					<div class="form-heading">
						<h4>book a room</h4>
					</div>
					<form method="post" action="\resort project\pages\sign-user.php" class="form-input">
						<input type="text" name="fname" placeholder="Name">
						<input type="tel" name="number" placeholder="Phone" pattern="[0-9]{3}[0-9]{4}[0-9]{3}" href="\resort project\pages\sign-user.php">
						<select name="Arrival date">
							<option>Arrival date</option>
							<option>March 15, 2022</option>
							<option>May 15, 2022</option>
							<option>June 15, 2022</option>
						</select>
						<select name="Departure date">
							<option>Departure date</option>
							<option>March 15, 2022</option>
							<option>May 15, 2022</option>
							<option>June 15, 2022</option>
						</select>
						<div class="adult-child">
							<select name="Adult">
								<option>Adult</option>
								<option>March 15, 2022</option>
								<option>May 15, 2022</option>
								<option>June 15, 2022</option>
							</select>
							<select name="Children" class="child">
								<option>Children</option>
								<option>March 15, 2022</option>
								<option>May 15, 2022</option>
								<option>June 15, 2022</option>
							</select>
						</div>
						<input type="submit" name="submit" class="btn" value="check availability"/>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- gallery -->
	<section class="gallery">
		<div class="container">
			<div class="sec-title mb-33">
				<div class="heading">
					<h2 class="animate__animated animate__fadeInLeft">gallery</h2>
				</div>
				<div class="sub-heading justify-content-center">
					<h4 class="animate__animated animate__fadeInDown">hotel gallery</h4>
					<div class="line-heading"></div>
				</div>
			</div>
			<div class="row justify-content-between">
				<div class="gallery-img animate__animated animate__slideInLeft">
					<img src="images/g1.jpg" alt="gallery-image"/>
					<div class="overlay">
						<h5>Affordable room rates</h5>
						<div class="over-btn">
							<a href="#">read more</a>
						</div>
					</div>
				</div>
				<div class="gallery-img animate__animated animate__slideInUp">
					<img src="images/g2.jpg" alt="gallery-image"/>
					<div class="overlay">
						<h5>Affordable room rates</h5>
						<div class="over-btn">
							<a href="#">read more</a>
						</div>
					</div>
				</div>
				<div class="gallery-img animate__animated animate__slideInDown">
					<img src="images/g3.jpg" alt="gallery-image"/>
					<div class="overlay">
						<h5>Affordable room rates</h5>
						<div class="over-btn">
							<a href="#">read more</a>
						</div>
					</div>
				</div>
				<div class="gallery-img animate__animated animate__slideInUp">
					<img src="images/g4.jpg" alt="gallery-image"/>
					<div class="overlay">
						<h5>Affordable room rates</h5>
						<div class="over-btn">
							<a href="#">read more</a>
						</div>
					</div>
				</div>
				<div class="gallery-img animate__animated animate__slideInDown">
					<img src="images/g5.jpg" alt="gallery-image"/>
					<div class="overlay">
						<h5>Affordable room rates</h5>
						<div class="over-btn">
							<a href="#">read more</a>
						</div>
					</div>
				</div>
				<div class="gallery-img animate__animated animate__slideInLeft">
					<img src="images/g6.jpg" alt="gallery-image"/>				
					<div class="overlay">
						<h5>Affordable room rates</h5>
						<div class="over-btn">
							<a href="#">read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- steps -->
	<section class="steps py-100">
		<div class="container">
			<div class="sec-title mb-33">
				<div class="heading">
					<h2 class="animate__animated animate__fadeInLeft">4 easy steps</h2>
				</div>
				<div class="sub-heading justify-content-center">
					<h4 class="animate__animated animate__fadeInDown">how to book a room</h4>
					<div class="line-heading"></div>
				</div>
			</div>
		<div class="row">
			<div class="step-box animate__animated animate__fadeInLeft">
				<div class="step-sub-box">
					<div class="step-box-icon">
						<i class="far fa-file-alt"></i>
					</div>
					<h5>
						<a href="#">Fill out an Online Form</a>
					</h5>
					<p>Everything starts with filling out the booking form on our website.</p>
				</div>
			</div>
			<div class="step-box animate__animated animate__fadeInLeft">
				<div class="step-sub-box">
					<div class="step-box-icon">
						<i class="fas fa-phone-volume"></i>
					</div>
					<h5>
						<a href="#">CONFIRM YOUR BOOKING</a>
					</h5>
					<p>After that, our staff will contact you confirm your booking.</p>
				</div>
			</div>
			<div class="step-box animate__animated animate__fadeInLeft">
				<div class="step-sub-box">
					<div class="step-box-icon">
						<i class="far fa-calendar-check"></i>
					</div>
					<h5>
						<a href="#">SELECT YOUR ROOM</a>
					</h5>
					<p>You can also select an exact room during your booking confirmation.</p>
				</div>
			</div>
			<div class="step-box animate__animated animate__fadeInLeft">
				<div class="step-sub-box">
					<div class="step-box-icon">
						<i class="far fa-star"></i>
					</div>
					<h5>
						<a href="#">CHECK IN AT THE HOTEL</a>
					</h5>
					<p>When you arrive at the hotel, don’t forget to check in at the front desk.</p>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- subscribe -->
	<section class="subscribe-bg py-100">
		<div class="container">
			<div class="row justify-content-center">
				<div class="subscribe-cont">
					<h3 class="animate__animated animate__slideInDown">Subcribe to Our Newsletter</h3>
					<p class="animate__animated animate__fadeInLeft">Leave your e-mail in the form below to sign up to our newsletter and receive regular news, updates, and special offers.</p>
					<form method="post" action="" class="subscribe-form">
						<input type="e-mail" class="animate__animated animate__slideInUp" id="mail" name="email" placeholder="Enter Your E-mail"/>
						<a href="#" class="btn animate__animated animate__slideInRight">subscribe</a>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- our team -->
	<section class="py-100 our-team">
		<div class="container">
			<div class="sec-title mb-33">
				<div class="heading">
					<h2 class="animate__animated animate__fadeInLeft">our team</h2>
				</div>
				<div class="sub-heading justify-content-center">
					<h4 class="animate__animated animate__fadeInDown">true professionals</h4>
					<div class="line-heading"></div>
				</div>
			</div>
			<div class="row justify-content-between">
				<div class="team-box animate__animated animate__fadeInRight">
					<div class="team-img">
						<a href="#"><img src="images/p1.jpg" alt="user1" class="user"/></a>
					</div>
					<div class="team-detail">
						<h5><a href="#">Samuel Miller</a></h5>
						<p>General Manager</p>
						<h6><a href="tel:+1 3239134688">+1 323-913-4688</a></h6>
					</div>
				</div>
				<div class="team-box  animate__animated animate__fadeInRight">
					<div class="team-img">
						<a href="#"><img src="images/p2.jpg" alt="user1" class="user"/></a>
					</div>
					<div class="team-detail">
						<h5><a href="#">Peter Mcmillan</a></h5>
						<p>Assistant Manager</p>
						<h6><a href="tel:+1 3239134688">+1 323-913-4688</a></h6>
					</div>
				</div>
				<div class="team-box animate__animated animate__fadeInRight">
					<div class="team-img">
						<a href="#"><img src="images/p3.jpg" alt="user1" class="user"/></a>
					</div>
					<div class="team-detail">
						<h5><a href="#">Jill Peterson</a></h5>
						<p>Front Office Manager</p>
						<h6><a href="tel:+1 3239134688">+1 323-913-4688</a></h6>
					</div>
				</div>
				<div class="team-box animate__animated animate__fadeInRight">
					<div class="team-img">
						<a href="#"><img src="images/p4.jpg" alt="user1" class="user"/></a>
					</div>
					<div class="team-detail">
						<h5><a href="#">James Smith</a></h5>
						<p>Concierge</p>
						<h6><a href="tel:+1 3239134688">+1 323-913-4688</a></h6>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- counter -->
	<section class="ex-bg">
		<div class="container">
			<div class="row">
				<div class="years">
					<a href="#" class="text-img">
						<h4>20</h4>
					</a>
				</div>
				<div class="experience animate__animated animate__fadeInUp">
					<h3>years of experience</h3>
					<p>Established in 1999, Resort Hotel is the leading hospitality establishment offering first-class accommodation.</p>
					<a href="#" class="btn">get in touch</a>
				</div>
				<div class="counters animate__animated animate__bounceInUp">
					<div class="row">
						<div class="counter-box">
							<div class="count-num">
								<h5>20<span>K</span></h5>
								<p>Satisfied clients</p>
							</div>
						</div>
						<div class="counter-box">
							<div class="count-num">
								<h5>240</h5>
								<p>rooms</p>
							</div>
						</div>
						<div class="counter-box">
							<div class="count-num">
								<h5>25</h5>
								<p>awards won</p>
							</div>
						</div>
						<div class="counter-box">
							<div class="count-num">
								<h5>100</h5>
								<p>team members</p>
							</div>
						</div>
					</div>
				</div>
				<div class="brands">
					<div class="row justify-content-center">
						<div class="brands-box animate__animated animate__fadeInLeft">
							<a href="#"><img src="images/clients-12-270x117.png" alt="brand-1"/></a>
						</div>
						<div class="brands-box  animate__animated animate__fadeInLeft">
							<a href="#"><img src="images/clients-13-270x117.png" alt="brand-2"/></a>
						</div>
						<div class="brands-box animate__animated animate__fadeInLeft">
							<a href="#"><img src="images/clients-14-270x117.png" alt="brand-3"/></a>
						</div>
						<div class="brands-box animate__animated animate__fadeInLeft">
							<a href="#"><img src="images/clients-15-270x117.png" alt="brand-4"/></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- faq -->
	<section class="py-100">
		<div class="container">
			<div class="sec-title mb-33">
				<div class="heading">
					<h2  class="animate__animated animate__fadeInLeft">faq</h2>
				</div>
				<div class="sub-heading justify-content-center">
					<h4 class="animate__animated animate__fadeInDown">your questions</h4>
					<div class="line-heading"></div>
				</div>
			</div>
			<div class="row">
				<div class="question animate__animated animate__fadeInUp">
					<div class="f-que">
						<div class="f-que-head">
							<a href="#">What do I receive when I order a template?</a>
							<div class="pm-icon">
								<i class="fas fa-plus"></i>
							</div>
						</div>
						<div class="f-que-para">
							<p>After you complete the payment via our secure form you will receive the instructions for downloading the product. The source files in the download package can vary.</p>
						</div>
					</div>
					<div class="s-que">
						<div class="s-que-head">
							<a href="#">IN WHAT FORMATS YOUR TEMPLATES AVAILABLE?</a>
							<div class="pm-icon">
								<i class="fas fa-plus"></i>
							</div>
						</div>
							<div class="s-que-para">
								<p>After you complete the payment via our secure form you will receive the instructions for downloading the product. The source files in the download package can vary.</p>
							</div>	
					</div>
					<div class="t-que">
						<div class="t-que-head">
							<a href="#">WHAT am I ALLOWED TO DO WITH d TEMPLATES?</a>
							<div class="pm-icon">
								<i class="fas fa-plus"></i>
							</div>
						</div>
							<div class="t-que-para">
								<p>After you complete the payment via our secure form you will receive the instructions for downloading the product. The source files in the download package can vary.</p>
							</div>	
					</div>
				</div>
				<div class="video animate__animated animate__fadeInRight">
						<iframe width="560" height="418" src="https://www.youtube.com/embed/e_TCFkRDmls" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- testimonials -->
	<section class="testimonials">
		<div class="container">
			<div class="sec-title mb-33">
				<div class="heading">
					<h2 class="animate__animated animate__fadeInLeft">testimonials</h2>
				</div>
				<div class="sub-heading justify-content-center">
					<h4 class="animate__animated animate__fadeInDown">what our clients say</h4>
					<div class="line-heading">
					</div>
					<div class="slide-btn">
						<i class="fas fa-angle-left nav-btn"></i>
						<i class="fas fa-angle-right nav-btn"></i>
					</div>
				</div>
			</div>
			<div class="row justify-content-between">
				<div class="client">
					<div class="client-head align-item-center">
						<div class="c-img">
							<img src="images/c1.jpg" alt="client-1"/>
						</div>
						<div class="c-name">
							<h5><a href="#">Rupert Wood</a></h5>
							<p>Client</p>
						</div>
					</div>
					<div class="client-para">
						<p>I had a marvelous time at Resort Hotel. From accommodation to spa, massage and room service, everything was wonderfully organized and delivered. This was definitely the best experience.</p>
					</div>
				</div>
				<div class="client">
					<div class="client-head align-item-center">
						<div class="c-img">
							<img src="images/c2.jpg" alt="client-2"/>
						</div>
						<div class="c-name">
							<h5><a href="#">Samantha Brown</a></h5>
							<p>Client</p>
						</div>
					</div>
					<div class="client-para">
						<p>This is a beautiful hotel with fantastic food, beautiful rooms & very professional staff, who were very polite, knowledgeable & always willing to help. My stay with you was fantastic!</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- blog -->
	<section class="pt-100 blog">
		<div class="container">
			<div class="sec-title mb-33">
				<div class="heading">
					<h2 class="animate__animated animate__fadeInLeft">our blog</h2>
				</div>
				<div class="sub-heading justify-content-center">
					<h4 class="animate__animated animate__fadeInDown">popular news</h4>
					<div class="line-heading"></div>
				</div>
			</div>
			<div class="row">
				<div class="blog-box animate__animated animate__slideInDown">
					<div class="blog-cont align-item-center">
						<div class="blog-img">
							<a href="#"><img src="images/b1.jpg" alt="blog-1"/></a>
						</div>
						<div class="blog-right">
							<p>may 04, 2019</p>
							<h5><a href="#">How to Easily Book the Best Hotel Room This Season</a></h5>
							<span><a href="#">News</a></span>
						</div>
					</div>
				</div>
				<div class="blog-box animate__animated animate__slideInUp">
					<div class="blog-cont align-item-center">
						<div class="blog-img">
							<a href="#"><img src="images/b2.jpg" alt="blog-2"/></a>
						</div>
						<div class="blog-right">
							<p>may 04, 2019</p>
							<h5><a href="#">20 Benefits of Visiting Spa & Massage Center at Resort Hotel</a></h5>
							<span><a href="#">News</a></span>
						</div>
					</div>
				</div>
				<div class="blog-box animate__animated animate__slideInUp">
					<div class="blog-cont align-item-center">
						<div class="blog-img">
							<a href="#"><img src="images/b3.jpg" alt="blog-3"/></a>
						</div>
						<div class="blog-right">
							<p>may 04, 2019</p>
							<h5><a href="#">15 Useful Hotel Safety Tips You Should Not Ignore</a></h5>
							<span><a href="#">News</a></span>
						</div>
					</div>
				</div>
				<div class="blog-box  animate__animated animate__slideInDown">
					<div class="blog-cont align-item-center">
						<div class="blog-img">
							<a href="#"><img src="images/b4.jpg" alt="blog-4"/></a>
						</div>
						<div class="blog-right">
							<p>may 04, 2019</p>
							<h5><a href="#">5 Simple Tricks for Getting Stellar Hotel Service</a></h5>
							<span><a href="#">News</a></span>
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
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script>
		jQuery(document).ready(function($) {
		  $('.fadeOut').owlCarousel({
			items: 1,
			animateOut: 'fadeOut',
			loop: true,
			margin: 10,
		  });
		  $('.custom1').owlCarousel({
			animateOut: 'slideOutDown',
			animateIn: 'flipInX',
			items: 1,
			margin: 30,
			stagePadding: 30,
			smartSpeed: 450
		  });
		});
	  </script>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script>
        document.onreadystatechange = function() {
            if (document.readyState !== "complete") {
                document.querySelector(
                  "body").style.visibility = "hidden";
                document.querySelector(
                  ".box").style.visibility = "visible";
            } else {
                document.querySelector(
                  ".box").style.display = "none";
                document.querySelector(
                  "body").style.visibility = "visible";
            }
        };
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".f-que .pm-icon").click(function(){
				$(".f-que-para").slideToggle();
			});
			$(".s-que .pm-icon").click(function(){
				$(".s-que-para").slideToggle();
			});
			$(".t-que .pm-icon").click(function(){
				$(".t-que-para").slideToggle();
			});
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
			$(".toggle").click(function(){
                $("nav").slideToggle("slow");
                $("nav").css("display","block");
            });
			$(window).scroll(function(){
				if($(this).scrollTop() >= 100){
					$(".main-menu").addClass("sticky");
				}
				else{
					$(".main-menu").removeClass("sticky");
				}
			});
			// $(window).on('load', function(){
            //     $(".box").fadeOut(1000, function(){
			// 		$("body").removeClass("loading");
			// 	});
            // });
			$(".close-btn").click(function(){
				$(".main-menu nav").slideUp(1000);
			});
			$(".toggle-btn").click(function(){
				$(".toggle-menu").slideToggle("slow");
				$(".toggle-menu").css("display","block");
			});
		});
	</script>

	<script src="../js/jquery-2.1.1.js" type="text/javascript"></script>
	<script src="../js/main.js" type="text/javascript"></script>
	<script>(function(w, d) { w.CollectId = "6259af79a20f4c4498135f64"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
</body>
</html>