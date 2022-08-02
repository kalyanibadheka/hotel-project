








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Resort | Designed for natural living.</title>
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
    <link rel="stylesheet" href="../css/rooms.css" type="text/css"/>

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
                    <h2>Rooms</h2>
                    <div class="indicate">
                        <p>Home</p>
                        <span>/</span>
                        <p> Rooms</p>
                    </div>
                </div>
            </div>
        </div>
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
					
				</div>
			</div>
			<div class="row justify-content-evenly">
				<?php

require 'config.php';
/*
$query = "SELECT * FROM registration";
$query_run = mysqli_query($conn,$query);

$check_faculty = mysqli_num_rows($query_run) > 0;
if($check_faculty)
	{
while($row = mysqli_fetch_array($query_run))
{
*/
$selectquery = "select * from registration ";
$query = mysqli_query($conn,$selectquery);
//$result = mysqli_fetch_array($query);
while ($result = mysqli_fetch_array($query)){
	


?>

					<div class="service-box">
					<!-- <input type="hidden" <?php echo $result['id'];  ?> value=<?php echo $result['id'] ?> name="id" /> -->
					<div class="service-img">
						<img src="../admin/upload/<?php echo $result['pic'];  ?>" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/room-detail.php"><?php	echo $result['type'];?></a></h5>
						<div class="service-price">
							<span>Rs. <?php	echo $result['price'];?></span>
							/night
						</div>
						<div class="btns">
							<!-- <a href="room-pages/room-detail.php" class="btn">Learn More</a> -->
							<a href="room-pages/room-detail.php?action&id=<?php echo $result['id'] ?>" name="submit" class="btn">Book Now</a>
						</div>
					</div>
				</div>

<?php

}

?>
				<!-- <div class="service-box">
					<div class="service-img">
						<img src="../images/i1.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/double-room.html">double room</a></h5>
						<div class="service-price">
							<span>$380</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/double-room.html" class="btn">Learn More</a>
							<a href="book-now.html" class="btn">Book Now</a>
						</div>
					</div>
				</div>
				<div class="service-box">
					<div class="service-img">
						<img src="../images/i3.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/hoolywood twin.html">HOLLYWOOD TWIN ROOM</a></h5>
						<div class="service-price">
							<span>$620</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/hoolywood twin.html" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div>
				<div class="service-box">
					<div class="service-img">
						<img src="../images/i4.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/singleroom.html">single room</a></h5>
						<div class="service-price">
							<span>$200</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/singleroom.html" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div>
				 <div class="service-box">
					<div class="service-img">
						<img src="../images/i5.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="#">FAMILY ROOM</a></h5>
						<div class="service-price">
							<span>$430</span>
							/night
						</div>
						<div class="btns">
							<a href="#" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div> 
				<div class="service-box">
					<div class="service-img">
						<img src="../images/i6.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/king sized.html">KING-SIZED room</a></h5>
						<div class="service-price">
							<span>$490</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/king sized.html" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div>
				<div class="service-box">
					<div class="service-img">
						<img src="../images/r3.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/twinroom.html">twin suite</a></h5>
						<div class="service-price">
							<span>$250</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/twinroom.html" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div>
				<div class="service-box">
					<div class="service-img">
						<img src="../images/i8.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/deluxe-premier-room.html">Deluxe Premier Room</a></h5>
						<div class="service-price">
							<span>$520</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/deluxe-premier-room.html" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div>
				<div class="service-box">
					<div class="service-img">
						<img src="../images/g9.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/deluxe-premier-riverview-room.html">Deluxe Premier River View Room</a></h5>
						<div class="service-price">
							<span>$520</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/deluxe-premier-riverview-room.html" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div>
				<div class="service-box">
					<div class="service-img">
						<img src="../images/g10.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/executive-club-room.html">Executive Club Room</a></h5>
						<div class="service-price">
							<span>$520</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/executive-club-room.html" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div>
				<div class="service-box">
					<div class="service-img">
						<img src="../images/g11.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/junior-suite.html">Junior Suite</a></h5>
						<div class="service-price">
							<span>$520</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/junior-suite.html" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div>
				<!-- <div class="service-box">
					<div class="service-img">
						<img src="../images/g12.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="#">Junior Club Suite</a></h5>
						<div class="service-price">
							<span>$520</span>
							/night
						</div>
						<div class="btns">
							<a href="#" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div> -->
				<!-- <div class="service-box">
					<div class="service-img">
						<img src="../images/i13.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/one-bedroom-suite.html">One Bedroom Suite</a></h5>
						<div class="service-price">
							<span>$520</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/one-bedroom-suite.html" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div><div class="service-box">
					<div class="service-img">
						<img src="../images/i14.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/one-bedroom-club-suite.html">One Bedroom Club Suite</a></h5>
						<div class="service-price">
							<span>$520</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/one-bedroom-club-suite.html" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div><div class="service-box">
					<div class="service-img">
						<img src="../images/i15.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/one-bedroom-riverview-suite.html">One Bedroom River View Suite</a></h5>
						<div class="service-price">
							<span>$520</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/one-bedroom-riverview-suite.html" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div>
				<div class="service-box">
					<div class="service-img">
						<img src="../images/i17.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/one-bedroom-lakeview.html">One Bedroom Lake View Suite</a></h5>
						<div class="service-price">
							<span>$520</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/one-bedroom-lakeview.html" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div><div class="service-box">
					<div class="service-img">
						<img src="../images/i18.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/regent-suite.html">regent suite</a></h5>
						<div class="service-price">
							<span>$520</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/regent-suite.html" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div>
				<div class="service-box">
					<div class="service-img">
						<img src="../images/i19.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/infinity-suite.html">infinity suite</a></h5>
						<div class="service-price">
							<span>$520</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/infinity-suite.html" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div>
				<div class="service-box">
					<div class="service-img">
						<img src="../images/r4.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="trippleroom.html">triple Bedroom</a></h5>
						<div class="service-price">
							<span>$620</span>
							/night
						</div>
						<div class="btns">
							<a href="#" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div> 
				</div>
				<div class="service-box">
					<div class="service-img">
						<img src="../images/r5.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/quad.html">quad</a></h5>
						<div class="service-price">
							<span>$520</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/quad.html" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div>
				<div class="service-box">
					<div class="service-img">
						<img src="../images/r6.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/queen.html">queen</a></h5>
						<div class="service-price">
							<span>$320</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/queen.html" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div>
				<div class="service-box">
					<div class="service-img">
						<img src="../images/r10.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/accessible-room.html">accessible room</a></h5>
						<div class="service-price">
							<span>$560</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/accessible-room.html" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div>
				<div class="service-box">
					<div class="service-img">
						<img src="../images/r11.jpg" alt="image"/>
					</div>
					<div class="service-detail">
						<h5><a href="room-pages/cabana.html">cabana</a></h5>
						<div class="service-price">
							<span>$730</span>
							/night
						</div>
						<div class="btns">
							<a href="room-pages/cabana.html" class="btn">Learn More</a>
							<a href="#" class="btn">Book Now</a>
						</div>
					</div>
				</div> --> 

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