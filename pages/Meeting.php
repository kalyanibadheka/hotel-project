


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meetings Event | Hotel Resort</title>
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
    <link rel="stylesheet" href="../css/meeting.css" type="text/css"/>


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
                    <h2>Meetings</h2>
                    <div class="indicate">
                        <p>Home</p>
                        <span>/</span>
                        <p> Events</p>
                        <span>/</span>
                        <p> Meetings</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fixed box -->
    <div class="fixbox">
        <i class="fas fa-angle-up"></i>
    </div>
    <!-- wedding  -->
    <main>
        <section class="wedding py-100">
            <div class="container">
                <div class="row">
                    <div class="col-5 overview">
                        <h2>Overview</h2>
                        <p>From industry conferences, to office social events, to confidential business meetings, a venue for every event. An attentive, expert events team to help coordinate and accommodate every request.</p>
                        
                    </div>
                    <div class="col-7">
                        <img src="../images/meet-overview.jpg" alt="overview-img" class="img-fluid"/>
                    </div>
                </div>
            </div>
        </section>
		<section class="themes py-100">
			<div class="container">
				<h2>Areas to Meetup</h2>
				<div class="row">
					<div class="col-4">
						<div class="card">
							<img src="../images/meeting2.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h4>OPEN AREA MEETING</h4>
								<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum est modi aut et non tempora consequuntur veniam.</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card">
							<img src="../images/meeting7.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h4>CAFE SIDE MEETING</h4>
								<p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque corporis quibusdam aliquid maiores, iste sapiente.</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card">
							<img src="../images/meeting4.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h4>CONFERENCE ROOM MEETING</h4>
								<p class="card-text beach-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis iste quibusdam dolore consectetur!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="gallery">
			<div class="container">
				<h2>gallery</h2>
				<div class="row">
					<div class="col-4">
						<img src="../images/meeting8.jpg" alt="" class="img-fluid rounded">
					</div>
					<div class="col-4">
						<img src="../images/meeting9.jpg" alt="" class="img-fluid rounded">
					</div>
					<div class="col-4">
						<img src="../images/meeting10.jpg" alt="" class="img-fluid rounded">
					</div>
					<div class="col-4">
						<img src="../images/meeting11.jpg" alt="" class="img-fluid rounded">
					</div>
					<div class="col-4">
						<img src="../images/meeting12.jpg" alt="" class="img-fluid rounded">
					</div>
					<div class="col-4">
						<img src="../images/meeting13.jpg" alt="" class="img-fluid rounded">
					</div>
				</div>
			</div>
		</section>
		<?php
		$con=mysqli_connect('localhost','root','','userform');

		if(!$con){
			die("sorry we fail to connect:". mysqli_connect_error());
		}
		else{
			// echo "connection successful<br>";
		}

		if(isset($_POST['submit']))
		{
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$address=$_POST['address'];
			$city=$_POST['city'];
			$area=$_POST['area'];
			$people=$_POST['people'];
			$table=$_POST['table'];
			$date=$_POST['date'];
			$info=$_POST['info'];

			// $sql="INSERT INTO entry('fname,'lname','address','city','area','people','table','date','info') values('$fname','$lname','$address','$city','$area','$people','$table','$date','$info')";

			$sql="INSERT INTO `meet`(`fname`, `lname`, `address`, `city`, `area`, `people`, `table`, `date`, `info`) VALUES ('$fname','$lname','$address','$city','$area','$people','$table','$date','$info')";

			$result= mysqli_query($con,$sql);

			if($result){
				// echo "record inserted successfully..";
			}
			else{
				echo "not inserted ". mysqli_error($con);
			}

		}
	?>
		<section class="book py-100">
			<div class="container">
				<div class="row">
					<div class="col-12 out-cont">
						<div class="col-7">
							<h4>
								Book Your Next Meeting
							</h4>
							<p><span>Appointments and Inquiries </span><br>
							Call us on: 1234567890 <br>
							E-Mail us at: abc@gmail.com</p>
							<a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book now</a>
							<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
								  <div class="modal-content">
									<div class="modal-header">
									  <h5 class="modal-title" id="staticBackdropLabel">Book Your Meeting</h5>
									  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
									
										<form class="row g-3" method="POST" action="">
											<div class="col-md-6">
											  <label for="fname"  class="form-label">First Name :</label>
											  <input type="text" class="form-control" name="fname">
											</div>
											<div class="col-md-6">
											  <label for="inputPassword4"  class="form-label">Last Name :</label>
											  <input type="text" class="form-control" name="lname">
											</div>
											<div class="col-12">
											  <label for="inputAddress"  class="form-label">Address :</label>
											  <input type="text" class="form-control" name="address">
											</div>
											<div class="col-md-6">
											  <label for="inputCity" class="form-label">City :</label>
											  <input type="text" class="form-control"  name="city">
											</div>
											<div class="col-md-6">
											  <label for="inputState"  class="form-label">Meeting Area :</label>
											  <select name="area" class="form-select">
												<option selected>Conference Room</option>
												<option>Cafe Side</option>
												<option>Open Area</option>
											  </select>
											</div>
											
											<div class="col-md-6">
												<label for="inputguest4"  class="form-label">Number of People :</label>
												<input type="text" class="form-control" name="people">
											</div>
											<div class="col-md-6">
												<label for="inputroom4" class="form-label">Number of Tables :</label>
												<input type="text" class="form-control"  name="table">
											</div>
											<div class="col-12">
												<label for="inputwdate4"  class="form-label">Prefered Meeting Date :</label>
												<input type="date" class="form-control" name="date">
											</div>
											<div class="col-12">
												<label for="info"  class="form-label">Additionl Information :</label>
												<input type="text" class="form-control" name="info">
											  </div>
										  
									</div>
									<div class="modal-footer">
									  <input type="submit" name="submit" value="Submit" class="btn">
									  <input type="reset" name="reset" Value="Cancel" class="btn" data-bs-dismiss="modal">
									</div>
									</form>
								  </div>
								</div>
							  </div>
						</div>
						<div class="col-5">
							<img src="../images/meeting14.jpg" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</section>
    </main>

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
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
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
			$(window).on('load', function(){
                $(".box").fadeOut(1000, function(){
					$("body").removeClass("loading");
				});
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
	<script src="../js/jquery-2.1.1.js" type="text/javascript"></script>
	<script src="../js/main.js" type="text/javascript"></script>
	
</body>
</html>