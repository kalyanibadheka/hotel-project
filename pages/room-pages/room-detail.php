
<?php

 require_once "../controllerUserData.php";  

$email = $_SESSION['email'];
if($email == false){
  header('Location: ../login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Resort | Designed for natural living.</title>
	<!-- font css -->
	<link href="../../css/fonts.css" rel="stylesheet" type="text/css"/>
		
	<!-- animate css -->
	<link href="../../css/animate.min.css" rel="stylesheet" type="text/css"/>

	<!-- font awesome -->
	<link href="../../css/all.min.css" rel="stylesheet" type="text/css"/>

    <!-- favicon icon -->
	<link href="../../images/ficon.png" rel="icon" type="image/png"/>

    <!-- fancyboc css -->
	<link rel="stylesheet" href="../../css/jquery.fancybox.min.css" type="text/css" />

    <!-- bootstrap css -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css">

    <!-- stylesheet -->
    <link rel="stylesheet" href="../../css/double-room.css" type="text/css"/>

	<style>
		/* .retrival option .pi{
			display:none;
			opacity: 0;
		} */
	</style>

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
		$id=$_POST['room_id'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $zip=$_POST['zip'];
        $email=$_POST['email'];
        $number=$_POST['number'];
		
		
		
		$rooms=$_POST['nrooms'];


        $checkin=$_POST['checkin'];
        $checkout=$_POST['checkout'];
        $pay=$_POST['pay'];
        $info=$_POST['info'];
		$type=$_POST['type'];
		

$_SESSION['fname'] = $fname;
$_SESSION['lname'] = $lname;
$_SESSION['address'] = $address;
$_SESSION['email'] = $email;
$_SESSION['checkin'] = $checkin;
$_SESSION['checkout'] = $checkout;
$_SESSION['nrooms'] = $rooms;
 $_SESSION['total'] = $_SESSION['price'] * $rooms + 5;
 $_SESSION['bed'] = $_SESSION['beds'] * $rooms; 
$bed = $_SESSION['bed'];
$total = $_SESSION['total'];

        $sql="INSERT INTO `room`(`room_id`,`type`,`fname`, `lname`, `address`, `city`, `zip`, `email`, `number`,`nrooms`, `tbeds`,`checkin`, `checkout`,`pay`,`total`) VALUES ('$id','$type','$fname','$lname','$address','$city','$zip','$email','$number','$rooms','$bed','$checkin','$checkout','$pay','$total')";

        $result= mysqli_query($con,$sql);
		
		
        if($result){
			header('Location:../paytm.php');
        }
        else{
            echo "not inserted ". mysqli_error($con);
        }

    }
    ?>
</head>
<body>
<header>
        <div class="topbar">	
            <div class="container">
                <div class="row">
                    <div class="logo">
                        <a href="../../index.php"><img src="../../images/logo.png" alt="logo"/></a>
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
                                <p><a href="../../restro/index.php" class="call-btn">Visit Restaurant</a></p>
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
						<a href="../../index.php"><img src="../images/logo.png" alt="logo"/></a>
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
								<a href="../../index.php">home</a>
							</li>
							<li>
								<a href="../aboutus.php">about us</a>
							</li>
							<li class="dropdown">
								<a href="../rooms.php">rooms</a>
								
							</li>
							<li class="dropdown">
								<a href="../gallery.php">gallery</a>
							
							</li>
							<li class="dropdown">
								<a href="../events.php">events</a>
								
							</li>
							<li>
								<a href="../contact-us.php">Contact Us</a>
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
									<a href="../profile.php">My Profile</a>
								</li>	
								<li>
									<a href="../logout-user.php">Log Out</a>
								</li>
								<?php } else { ?>		
								<li>
									<a href="../contact-us.php">Login</a>
								</li>
								<li>
									<a href="../logout-user.php">Register</a>
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
                    <!-- <div class="indicate">
                        <p>Home</p>
                        <span>/</span>
                        <p> Rooms  / </p>

                        &nbsp;&nbsp;<p> <?php 
						// echo $result['type'];  ?></p>

                    </div> -->
                </div>
            </div>
        </div>
        </section>
        <!-- fixed box -->
        <div class="fixbox">
            <i class="fas fa-angle-up"></i>
        </div>
        <!-- double-room -->
        <?php
            require '../config.php';

            // if(isset($_POST['submit']))
            //     {
            //         $id = $_POST['id'];
            //         $type = $_POST['type'];
            //         $price = $_POST['price'];
            //         $pic = $_POST['pic'];
                    
			if(isset($_GET['action']))
			{
					$id = $_GET['id'];
					
                    $selectquery = "SELECT * FROM `registration` WHERE `id`='$id'";
                    $query = mysqli_query($conn,$selectquery);
                  
					// $result = mysqli_fetch_array($query);
					while ($result = mysqli_fetch_array($query)){
						
						$_SESSION['price'] = $result['price'];
						$_SESSION['beds']  = $result['bed'];
					
				
                    
		
		
		?>
						<section class="d-room">
							<div class="container">
								<div class="head">
									<h2><?php echo $result['type'];  ?></h2>
								</div>
								<div class="row ">
									<div class="img-dis justify-content-evenly">
										<div class="room-img">
											<img src="../../admin/upload/<?php echo $result['pic'];  ?>" alt="image" class="img-fluid"/>
										</div>
										<div class="room-dis">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure consequuntur unde quidem consequatur praesentium, quas quos rerum maiores sit ullam! Porro corrupti suscipit voluptatibus ipsa? Omnis accusamus tenetur officia dolorem quos aut error debitis itaque est perferendis nostrum, iure cum facere delectus velit magnam corrupti ex, quidem ipsa esse illo!</p>

											<h3>Rs. <?php echo $result['price'];?></h3>
										</div>

									</div>
									<div class="plans justify-content-between">
										<div class="plan-gallery">
											<img src="../../admin/upload/<?php echo $result['pic'];  ?>"  data-fancybox="image" data-caption="single room" alt="room">
											<div class="overlay-round">
												<img src="../../images/glr.png" alt="gallery">
												<p>gallery</p>
											</div>
										</div>
										<div class="plan-map">
											<img src="../../admin/upload/<?php echo $result['pic'];  ?>" class="f-plan" alt="room" data-fancybox="image" data-caption="floor plan" >                           
											<div class="overlay-round">
												<img src="../../images/map.png" alt="gallery">
												<p>floor plan</p>
											</div>
										</div>
										<a href="../room-tour.php">
										<div class="plan-tour">
											<img src="../../admin/upload/<?php echo $result['pic'];  ?>" alt="room" >
											<div class="overlay-round">
												<img src="../../images/360d.png" alt="gallery">
												<p>Virtual tour</p>
											</div>
										</div>
										</a>
									</div>
									<div class="facts-block">
										<ul><li>
											<h2>Size</h2>
											<div class="rich-content">
												<p>43m<sup>2 </sup>/ 400ft<sup>2</sup></p>
											</div></li><li>
											<h2>Location</h2>
											<div class="rich-content">
												<p>14<sup>th</sup>  floor</p>
											</div></li><li>
											<h2>View</h2>
											<div class="rich-content">
												<p>Chicago city</p>
											</div></li><li>
											<h2>Bed</h2>
											<div class="rich-content">
												<p> Double bed</p>
											</div></li><li>
											<h2>Room Occupancy</h2>
											<div class="rich-content">
												<p>2 guests</p>
											</div></li><li>
											<h2>Extra Bed</h2>
											<div class="rich-content">
												<p>none</p>
											</div></li><li>
											<h2>Additional Notes</h2>
											<div class="rich-content">
												<p>Non-Smoking</p>
											</div></li><li>
											<h2>ACCESSIBLE ROOM</h2>
											<div class="rich-content">
												<p><span> (For more details, please click </span><a href="../access-facility.html">here</a><span>)</span>
												</p>
											</div></li></ul>
									</div>
									<div class="book-btn">
										




	<!-- <a href="room-pages/room-detail.php" class="btn">Learn More</a> -->








										<a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book now</a>
										<!-- Modal -->
										<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
											<div class="modal-content">
												<div class="modal-header">
												<h5 class="modal-title" id="staticBackdropLabel">Book Your Room</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<form class="row g-3" method="post" action="">
														<input type="hidden" name="room_id" value="<?= isset($_GET['id']) ? $_GET['id'] : '' ?>">
														
														
														<input type="hidden" value="<?php echo $result['type'];?>" class="form-control" name="type" id="inputfname4">
										

														
														<div class="col-md-6">
														<label for="inputEmail4" class="form-label">First Name :</label>
														<input type="text" class="form-control" name="fname" id="inputfname4">
														</div>
														<div class="col-md-6">
														<label for="inputPassword4" class="form-label">Last Name :</label>
														<input type="text" class="form-control" name="lname" id="inputlname4">
														</div>


														
														<div class="col-12">
														<label for="inputAddress" class="form-label">Address :</label>
														<input type="text" class="form-control" name="address" id="inputAddress" >
														</div>
														<div class="col-md-8">
														<label for="inputCity" class="form-label">City :</label>
														<input type="text" class="form-control" name="city" id="inputCity">
														</div>
														<div class="col-md-4">
														<label for="inputZip" class="form-label">Zip</label>
														<input type="text" class="form-control" name="zip" id="inputZip">
														</div>
														<div class="col-6">
															<label for="inputwdate4" class="form-label">Email :</label>
															<input type="email" class="form-control" name="email" id="inputwdate4">
														</div>
														<div class="col-6">
															<label for="inputwdate4" class="form-label">Contact Number :</label>
															<input type="number" class="form-control" name="number" id="inputwdate4">
														</div>
														
														<div class="col-md-6">
															<label for="inputguest4" class="form-label">Check in Date :</label>
															<input type="date" class="form-control" name="checkin" id="inputguest4">
														</div>
														<div class="col-md-6">
															<label for="inputroom4" class="form-label">Check out Date :</label>
															<input type="date" class="form-control" name="checkout" id="inputroom4">
														</div>
														<div class="col-12">
															<label for="inputroom4" class="form-label"> Number oF Rooms :</label>
															

                                                             <select id="cars" name="nrooms">
                                                             <option value="1"> 1</option>
                                                             <option value="2"> 2</option>
                                                             <option value="3">3</option>
                                                             <option value="4">4</option>
                                                             </select>
														</div>


														
														
														<div class="col-12">
															<label for="inputinfo4" class="form-label"> Payable amount :</label>
															<input type="text" class="form-control" readonly name="pay" id="inputinfo4" value="<?php   echo $result['price'];?> Per room">
														</div>
												</div>
												
											
												<div class="modal-footer justify-content-center">
													<a><input type="submit" name="submit" value="submit" 
													class="btn"></a>
													<a><input type="reset" name="reset" Value="Cancel" class="btn" data-bs-dismiss="modal"></a>
												</div>
											</form>
											
										</div>
									</div>
							</div>
									</div>
										
									</div>
									<div class="indicate-link">
										<div class="next-btn prev-btn">
											<i class="fas fa-angle-double-left"></i>
											<a href="hoolywood twin.html">Previous Room</a>
										</div>
										<div class="next-btn">
											<a href="king sized.html">Next Room</a>
											<i class="fas fa-angle-double-right"></i>
										</div>
									</div>
								</div>
							</div>
						</section>
        <?php } }?>
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
	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<script src="../../js/jquery.fancybox.min.js" type="text/javascript"></script>
    <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
	<script src=""></script>
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
			$(".plan-map").click(function(){
                $(".f-plan").attr("src","../../images/floor-plan.JPG");
            });
			$(".plan-tour").click(function(){
				$(".room-tour").css("display","block");
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