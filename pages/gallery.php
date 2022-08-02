



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Resort</title>
	<!-- font css -->
	<link href="../css/fonts.css" rel="stylesheet" type="text/css"/>
		
	<!-- animate css -->
	<link href="../css/animate.min.css" rel="stylesheet" type="text/css"/>

	<!-- font awesome -->
	<link href="../css/all.min.css" rel="stylesheet" type="text/css"/>

    <!-- lightbox css -->
    <link rel="stylesheet" href="../css/jquery.fancybox.min.css" types="text/css"> 

    <!-- favicon icon -->
	<link href="../images/ficon.png" rel="icon" type="image/png"/>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">

    <!-- stylesheet -->
    <link rel="stylesheet" href="../css/gallery.css" type="text/css"/>

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
                    <h2>Gallery</h2>
                    <div class="indicate">
                        <p>Home</p>
                        <span>/</span>
                        <p> Gallery</p>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- fixed box -->
        <div class="fixbox">
            <i class="fas fa-angle-up"></i>
        </div>
        <!-- gallery -->
        <section class="glr">
            <div class="container">
                <div class="row">
                    <div class="grid-wrapper">
                        <div>
                            <a href="../images/g1.jpg" data-fancybox="gallery" data-caption="Image #1">
                                <img src="../images/g1.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div>
                            <a href="../images/g2.jpg" data-fancybox="gallery" data-caption="Image #2">
                                <img src="../images/g2.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="tall">
                            <a href="../images/g3.jpg" data-fancybox="gallery" data-caption="Image #3">
                                <img src="../images/g3.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="wide">
                            <a href="../images/g4.jpg" data-fancybox="gallery" data-caption="Image #4">
                                <img src="../images/g4.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div>
                            <a href="../images/g5.jpg" data-fancybox="gallery" data-caption="Image #5">
                                <img src="../images/g5.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="tall">
                            <a href="../images/g6.jpg" data-fancybox="gallery" data-caption="Image #6">
                                <img src="../images/g6.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="big">
                            <a href="../images/g7.jpg" data-fancybox="gallery" data-caption="Image #7">
                                <img src="../images/g7.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div>
                            <a href="../images/g8.jpg" data-fancybox="gallery" data-caption="Image #8">
                                <img src="../images/g8.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="wide">
                            <a href="../images/g9.jpg" data-fancybox="gallery" data-caption="Image #9">
                                <img src="../images/g9.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="big">
                            <a href="../images/g10.jpg" data-fancybox="gallery" data-caption="Image #10">
                                <img src="../images/g10.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="tall">
                            <a href="../images/g11.jpg" data-fancybox="gallery" data-caption="Image #11">
                                <img src="../images/g11.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div>
                            <a href="../images/g12.jpg" data-fancybox="gallery" data-caption="Image #12">
                                <img src="../images/g12.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div>
                            <a href="../images/g13.jpg" data-fancybox="gallery" data-caption="Image #13">
                                <img src="../images/g13.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div>
                            <a href="../images/g14.jpg" data-fancybox="gallery" data-caption="Image #14">
                                <img src="../images/g14.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div>
                            <a href="../images/g15.jpg" data-fancybox="gallery" data-caption="Image #15">
                                <img src="../images/g15.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="wide">
                            <a href="../images/g16.jpg" data-fancybox="gallery" data-caption="Image #16">
                                <img src="../images/g16.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div>
                            <a href="../images/g17.jpg" data-fancybox="gallery" data-caption="Image #17">
                                <img src="../images/g17.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div>
                            <a href="../images/g18.jpg" data-fancybox="gallery" data-caption="Image #18">
                                <img src="../images/g18.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="wide">
                            <a href="../images/g19.jpg" data-fancybox="gallery" data-caption="Image #19">
                                <img src="../images/g19.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div>
                            <a href="../images/g20.jpg" data-fancybox="gallery" data-caption="Image #20">
                                <img src="../images/g20.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="wide">
                            <a href="../images/g21.jpg" data-fancybox="gallery" data-caption="Image #21">
                                <img src="../images/g21.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="big">
                            <a href="../images/g22.jpg" data-fancybox="gallery" data-caption="Image #22">
                                <img src="../images/g22.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div>
                            <a href="../images/g23.jpg" data-fancybox="gallery" data-caption="Image #23">
                                <img src="../images/g23.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div>
                            <a href="../images/g24.jpg" data-fancybox="gallery" data-caption="Image #24">
                                <img src="../images/g24.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="big">
                            <a href="../images/g25.jpg" data-fancybox="gallery" data-caption="Image #25">
                                <img src="../images/g25.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="tall">
                            <a href="../images/g26.jpg" data-fancybox="gallery" data-caption="Image #26">
                                <img src="../images/g26.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div>
                            <a href="../images/g27.jpg" data-fancybox="gallery" data-caption="Image #27">
                                <img src="../images/g27.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div>
                            <a href="../images/g28.jpg" data-fancybox="gallery" data-caption="Image #28">
                                <img src="../images/g28.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="wide">
                            <a href="../images/g29.jpg" data-fancybox="gallery" data-caption="Image #29">
                                <img src="../images/g29.jpg" alt="" />
                            </a>                            
                            <div class="img-icon">
                                <i class="fas fa-search-plus"></i>
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
        <script type="text/javascript" src="../js/jquery.fancybox.min.js"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
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
    </body>
    </html>