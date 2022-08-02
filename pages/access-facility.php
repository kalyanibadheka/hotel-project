<?php

session_start();
if(!isset($_SESSION['name'])){
	header('location:login-user.php');
}
?>








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
    <link rel="stylesheet" href="../css/access-facility.css" type="text/css"/>

</head>
<body>
<i class="fas fa-address-card"></i>        <!-- head slider -->
        <section class="slider">
            <div class="overlay">
            <div class="container">
                <div class="row">
                    <h2>ACCESSIBLE FACILITIES</h2>
                    <div class="indicate">
                        <p>Overview</p>
                        <span>/</span>
                        <p> ACCESSIBLE FACILITIES</p>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- fixed box -->
        <div class="fixbox">
            <i class="fas fa-angle-up"></i>
        </div>
        <!-- Accessible Facility -->
        <section class="access">
            <div class="container">
                <div class="row">
                    <div class="l-container-small">
                        <div class="headline">
                            <h1>Accessible facilities</h1>
            <div class="description-block">
        
                <div class="rich-content">
                    <p>The Langham Hotels &amp; Resorts is committed to ensuring the comfort and safety of every guest. Learn about the accessible facilities and services in our hotel that allow guests with disabilities to navigate with ease.</p>
        <p><strong>Common areas</strong></p>
        <ul>
        <li>Designated handicap parking with a priority location in the parking lot</li>
        <li>Step free access level main entrance</li>
        <li>Large entrance door with doorman</li>
        <li>Second floor main lobby accessible by elevator</li>
        <li>Clear signage indicating elevator/restroom with braille</li>
        <li>Accessible restroom in the main lobby</li>
        <li>Elevator to above ground accessible accommodation</li>
        <li>level access to public areas</li>
        <li>Accessible fitness facility</li>
        </ul>
        <p><br><strong>Rooms</strong></p>
        <ul>
        <li>Wide entry and bathroom doorways</li>
        <li>Mid-height light switches and power outlets</li>
        <li>Lever type door handles</li>
        <li>90 cm maneuvering space on each side of the bed</li>
        <li>Roll in shower</li>
        <li>wheeled shower chair and/or wall mounted shower seat</li>
        <li>Grab bars in bathroom</li>
        <li>Raised toilet</li>
        <li>Lower hanging space in closet</li>
        <li>Hearing impaired kit on request</li>
        <li>Strobe lights</li>
        <li>Pillow shaker</li>
        <li>Text Telephone</li>
        <li>Telephone Signaler</li>
        <li>Vibe Alert Alarm Clock</li>
        <li>Door Knocker with Light</li>
        </ul>
        <p><br><strong>Services</strong></p>
        <ul>
        <li>Wheelchairs on property for guest use</li>
        </ul>
        <p><br><strong>Neighbourhood</strong></p>
        <ul>
        <li>Proximity to markets, pubs and restaurants within 500m of the hotel</li>
        <li>Proximity to health services</li>
        </ul>
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