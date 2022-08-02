<?php
// session_start();
 require_once "controllerUserData.php";  

$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}


require_once("../PaytmKit/lib/config_paytm.php");
require_once("../PaytmKit/lib/encdec_paytm.php");

    // define("merchantMid", "dZlzzF17647713571019");
    // Key in your staging and production MID available in your dashboard
    // define("merchantKey", "O0zUdI1&G%OQViK_");
    // Key in your staging and production merchant key available in your dashboard
    // define("orderId", "order1");
    // define("channelId", "WEB");
    // define("website", "WEBSTAGING");
    // define("industryTypeId", "Retail");
    // define("callbackUrl", "http://127.0.0.1/devchandan/payment-using-paytm/response.php");
    // define("txnAmount", "100.12");
    // This is the staging value. Production value is available in your dashboard
    // This is the staging value. Production value is available in your dashboard
    // define("callbackUrl", "https://<Merchant_Response_URL>");

    $orderId 	= time();
    $txnAmount 	=  $_SESSION['total'];
    $custId 	= "cust123";
    $mobileNo 	= "7777777777";
    $email 		= $_SESSION['email'];

    $paytmParams = array();
    $paytmParams["ORDER_ID"] 	= $orderId;
    $paytmParams["CUST_ID"] 	= $custId;
    $paytmParams["MOBILE_NO"] 	= $mobileNo;
    $paytmParams["EMAIL"] 		= $email;
    $paytmParams["TXN_AMOUNT"] 	= $txnAmount;
    $paytmParams["MID"] 		= PAYTM_MERCHANT_MID;
    $paytmParams["CHANNEL_ID"] 	= PAYTM_CHANNEL_ID;
    $paytmParams["WEBSITE"] 	= PAYTM_MERCHANT_WEBSITE;
    $paytmParams["INDUSTRY_TYPE_ID"] = PAYTM_INDUSTRY_TYPE_ID;
    $paytmParams["CALLBACK_URL"] = PAYTM_CALLBACK_URL;
    $paytmChecksum = getChecksumFromArray($paytmParams, PAYTM_MERCHANT_KEY);
    $transactionURL = PAYTM_TXN_URL;
    // $transactionURL = "https://securegw-stage.paytm.in/theia/processTransaction";
    // $transactionURL = "https://securegw.paytm.in/theia/processTransaction"; // for production
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party Event | Hotel Resort</title>
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
    <link rel="stylesheet" href="../css/party.css" type="text/css"/>

        <style type="text/css">
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        @media screen and (max-width: 480px) {
            .mobile-hide {
                display: none !important;
            }

            .mobile-center {
                text-align: center !important;
            }
        }

        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
    </style>
    
    </head>
    

<body style="margin: 0 !important; padding: 0 !important; background-color: #eeeeee;" bgcolor="#eeeeee">
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
    <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Open Sans, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
        For what reason would it be advisable for me to think about business content? That might be little bit risky to have crew member like them.
    </div>
    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mt-3 mb-3">
        <tr>
            <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                    <tr>
                        <td align="center" valign="top" style="font-size:0; padding: 35px;" bgcolor="#ffffff">
                            <div style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;">
                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                    <tr>
                                        <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 36px; font-weight: 800; line-height: 48px;" class="mobile-center">
                                        <a href="../index.html"><img src="../images/logo.png" alt="logo" class="w-50 img-fluid"/></a>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;" class="mobile-hide">
                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                    <tr>
                                        <td align="right" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; line-height: 48px;">
                                            <table cellspacing="0" cellpadding="0" border="0" align="right">
                                                <tr>
                                                    <!-- <td style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400;">
                                                        <p style="font-size: 18px; font-weight: 400; margin: 0; color: #ffffff;"><a href="#" target="_blank" style="color: #ffffff; text-decoration: none;">Shop &nbsp;</a></p>
                                                    </td>
                                                    <td style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 24px;"> <a href="#" target="_blank" style="color: #ffffff; text-decoration: none;"><img src="https://img.icons8.com/color/48/000000/small-business.png" width="27" height="23" style="display: block; border: 0px;" /></a> </td> -->
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                <tr>
                                    <td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;"> <img src="https://img.icons8.com/carbon-copy/100/000000/checked-checkbox.png" width="125" height="120" style="display: block; border: 0px;" /><br>
                                        <h2 style="font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;"> Confirm your detail before pay </h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                                        <!-- <p style="font-size: 16px; font-weight: 400; line-height: 24px; color: #777777;"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium iste ipsa numquam odio dolores, nam. </p> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-top: 20px;">
                                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td width="75%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;"> Booking Confirmation</td>
                                                <td width="25%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">  </td>
                                            </tr>
                                            <tr>
                                                <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> Booked rooms </td>
                                                <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> <?php echo $_SESSION['nrooms'];?> </td>
                                            </tr>
                                            <tr>
                                                <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> Per room </td>
                                                <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"><?php echo $_SESSION['price']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> Bed </td>
                                                <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"><?php echo $_SESSION['bed'];?> </td>
                                            </tr>
                                            <tr>
                                                <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> Tax </td>
                                                <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> ₹500.00 </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-top: 20px;">
                                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;"> TOTAL </td>
                                                <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;"><?php echo $_SESSION['total'];?> </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" height="100%" valign="top" width="100%" style="padding: 0 35px 35px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:660px;">
                                <tr>
                                    <td align="center" valign="top" style="font-size:0;">
                                        <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                                <tr>
                                                    <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                                        <p style="font-weight: 800;">Check-in-date</p>
                                                        <p><?php echo $_SESSION['checkin'];?></p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                                <tr>
                                                    <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                                        <p style="font-weight: 800;">Check-out-date</p>
                                                        <p><?php echo $_SESSION['checkout'];?></p>
                                                    </td>
                                                </tr>
                                                
                                            </table>
                                            <tr align="center">
                                                    <td>        <form method='post' action='<?php echo $transactionURL; ?>' name='f1'>
            <?php
                foreach($paytmParams as $name => $value) {
                    echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
                }
            ?>
            <input type="hidden" name="CHECKSUMHASH" value="<?php echo $paytmChecksum ?>">
            <input type="submit" class="btn" name="submit" value="submit" />
        </form>
</td>
                                                </tr>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- <tr>
                        <td align="center" style=" padding: 35px; background-color: #ff7361;" bgcolor="#1b9ba3">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                <tr>
                                    <td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;">
                                        <h2 style="font-size: 24px; font-weight: 800; line-height: 30px; color: #ffffff; margin: 0;"> Get 30% off your next order. </h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="padding: 25px 0 15px 0;">-->
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <!-- <td align="center" style="border-radius: 5px;" bgcolor="#66b3b7"> <a href="#" target="_blank" style="font-size: 18px; font-family: Open Sans, Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; border-radius: 5px; background-color: #F44336; padding: 15px 30px; border: 1px solid #F44336; display: block;">Shop Again</a> </td> -->
                                           
                                           
                                                <!-- <center><h1>Please do not refresh this page...</h1></center>  -->
                                           
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td align="center" style="padding: 35px; background-color: #ffffff;" bgcolor="#ffffff">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                <tr>
                                    <td align="center"> <img src="logo-footer.png" width="37" height="37" style="display: block; border: 0px;" /> </td>
                                </tr>
                                <tr>
                                    <td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 24px; padding: 5px 0 10px 0;">
                                        <p style="font-size: 14px; font-weight: 800; line-height: 18px; color: #333333;"> 675 Parko Avenue<br> LA, CA 02232 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 24px;">
                                        <p style="font-size: 14px; font-weight: 400; line-height: 20px; color: #777777;"> If you didn't create an account using this email address, please ignore this email or <a href="#" target="_blank" style="color: #777777;">unsusbscribe</a>. </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>    <!-- footer -->
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


        <!-- <center><h1>Please do not refresh this page...</h1></center> --> 
        <form method='post' action='<?php echo $transactionURL; ?>' name='f1'>
            <?php
                foreach($paytmParams as $name => $value) {
                    echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
                }
            ?>
            <input type="hidden" name="CHECKSUMHASH" value="<?php echo $paytmChecksum ?>">
            <input type="submit" name="submit" value="submit" />
        </form>
        <!-- <script type="text/javascript">
            document.f1.submit();
        </script> -->
    </body>
</html>




