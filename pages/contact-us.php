<?php

session_start();
if(!isset($_SESSION['name'])){
	header('location:login-user.php');
}
?>
<?php
	$con=mysqli_connect('localhost','root','','userform');

	if(isset($_POST['submit'])){
		$title=$_POST['title'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$location=$_POST['location'];
		$mail=$_POST['mail'];
		$number=$_POST['number'];
		$request=$_POST['request'];
		$query=$_POST['query'];
	
		$sql="INSERT INTO `contact`(`title`,`fname`, `lname`, `location`, `mail`, `number`, `request`, `query`) VALUES ('$title','$fname','$lname','$location','$mail','$number','$request','$query')";

		$result= mysqli_query($con,$sql);

		if($result){
			echo "<script >alert(success); </script>";
		}
		else{
			echo "not inserted ". mysqli_error($con);
		}

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

    <!-- favicon icon -->
	<link href="../images/ficon.png" rel="icon" type="image/png"/>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">

    <!-- stylesheet -->
    <link rel="stylesheet" href="../css/contact-us.css" type="text/css"/>

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
                    <h2>Contact Us</h2>
                    <div class="indicate">
                        <p>Home</p>
                        <span>/</span>
                        <p> Contact Us</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fixed box -->
    <div class="fixbox">
        <i class="fas fa-angle-up"></i>
    </div>
	<!-- map-form -->
	<section class="map-form">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241316.64332144568!2d72.74109713631994!3d19.082522324824836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1642558531614!5m2!1sen!2sin" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="col-lg-6 contact-form">
					<form action="" method="post"><div class="custom-form-row">
						<h2><span>
						Personal Data (* required field)
						</span></h2>
						</div>
						<div class="custom-form-row">
						<div class="custom-form-group text-left textfield ">
							<label for="textfield">*Title</label>
							<div class="custom-form-field">
						<select class="form-control" id="textfield" name="title" required="required" title="Title"><option selected="selected" value="">-- Please select --</option>
						<option value="Mr.">Mr.</option>
						<option value="Miss">Miss</option>
						<option value="Ms.">Ms.</option>
						<option value="Mrs.">Mrs.</option>
						</select>            
							</div>
						</div>
						
						</div>
						<div style="" class="custom-form-row">
						<div class="custom-form-group text-left name ">
							<label for="name">*First Name</label>
							<div class="custom-form-field">
						<input class="form-control" id="name" name="fname" required="required" size="50" type="text" value="" aria-required="true" spellcheck="false" data-ms-editor="true">       
							</div>
						</div>
						</div>
						<div style="" class="custom-form-row">
						<div class="custom-form-group text-left name2 ">
							<label for="name2">*Last Name</label>
							<div class="custom-form-field">
						<input class="form-control" id="name2" name="lname" size="50" type="text" value="" spellcheck="false" data-ms-editor="true">        
							</div>
						</div>
						</div>
						<div class="custom-form-row">
						<div class="custom-form-group text-left Location ">
							<label for="Location">*Location</label>
							<div class="custom-form-field">
						<select class="form-control" id="Location" name="location" required="required" title="Location"><option selected="selected" value="">-- Please Select --</option>
						<option value="Afghanistan">Afghanistan</option>
						<option value="Aland Islands">Aland Islands</option>
						<option value="Albania">Albania</option>
						<option value="Algeria">Algeria</option>
						<option value="American Samoa">American Samoa</option>
						<option value="Andorra">Andorra</option>
						<option value="Angola">Angola</option>
						<option value="Anguilla">Anguilla</option>
						<option value="Antarctica">Antarctica</option>
						<option value="Antigua And Barbuda">Antigua And Barbuda</option>
						<option value="Argentina">Argentina</option>
						<option value="Armenia">Armenia</option>
						<option value="Aruba">Aruba</option>
						<option value="Australia">Australia</option>
						<option value="Austria">Austria</option>
						<option value="Azerbaijan">Azerbaijan</option>
						<option value="Bahamas">Bahamas</option>
						<option value="Bahrain">Bahrain</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="Barbados">Barbados</option>
						<option value="Belarus">Belarus</option>
						<option value="Belgium">Belgium</option>
						<option value="Belize">Belize</option>
						<option value="Benin">Benin</option>
						<option value="Bermuda">Bermuda</option>
						<option value="Bhutan">Bhutan</option>
						<option value="Bolivia">Bolivia</option>
						<option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
						<option value="Botswana">Botswana</option>
						<option value="Bouvet Island">Bouvet Island</option>
						<option value="Brazil">Brazil</option>
						<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
						<option value="Brunei Darussalam">Brunei Darussalam</option>
						<option value="Bulgaria">Bulgaria</option>
						<option value="Burkina Faso">Burkina Faso</option>
						<option value="Burundi">Burundi</option>
						<option value="Cambodia">Cambodia</option>
						<option value="Cameroon">Cameroon</option>
						<option value="Canada">Canada</option>
						<option value="Cape Verde">Cape Verde</option>
						<option value="Cayman Islands">Cayman Islands</option>
						<option value="Central African Republic">Central African Republic</option>
						<option value="Chad">Chad</option>
						<option value="Chile">Chile</option>
						<option value="China">Mainland China</option>
						<option value="Christmas Island">Christmas Island</option>
						<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
						<option value="Colombia">Colombia</option>
						<option value="Comoros">Comoros</option>
						<option value="Congo">Congo</option>
						<option value="Cook Islands">Cook Islands</option>
						<option value="Costa Rica">Costa Rica</option>
						<option value="Cote D'Ivoire">Cote D'Ivoire</option>
						<option value="Croatia">Croatia</option>
						<option value="Cuba">Cuba</option>
						<option value="Cyprus">Cyprus</option>
						<option value="Czech Republic">Czech Republic</option>
						<option value="Denmark">Denmark</option>
						<option value="Djibouti">Djibouti</option>
						<option value="Dominica">Dominica</option>
						<option value="Dominican Republic">Dominican Republic</option>
						<option value="Ecuador">Ecuador</option>
						<option value="Egypt">Egypt</option>
						<option value="El Salvador">El Salvador</option>
						<option value="Equatorial Guinea">Equatorial Guinea</option>
						<option value="Eritrea">Eritrea</option>
						<option value="Estonia">Estonia</option>
						<option value="Ethiopia">Ethiopia</option>
						<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
						<option value="Faroe Islands">Faroe Islands</option>
						<option value="Fiji">Fiji</option>
						<option value="Finland">Finland</option>
						<option value="France">France</option>
						<option value="French Guiana">French Guiana</option>
						<option value="French Polynesia">French Polynesia</option>
						<option value="French Southern Territories">French Southern Territories</option>
						<option value="Gabon">Gabon</option>
						<option value="Gambia">Gambia</option>
						<option value="Georgia">Georgia</option>
						<option value="Germany">Germany</option>
						<option value="Ghana">Ghana</option>
						<option value="Gibraltar">Gibraltar</option>
						<option value="Greece">Greece</option>
						<option value="Greenland">Greenland</option>
						<option value="Grenada">Grenada</option>
						<option value="Guadeloupe">Guadeloupe</option>
						<option value="Guam">Guam</option>
						<option value="Guatemala">Guatemala</option>
						<option value="Guinea">Guinea</option>
						<option value="Guinea-Bissau">Guinea-Bissau</option>
						<option value="Guyana">Guyana</option>
						<option value="Haiti">Haiti</option>
						<option value="Heard Island And Mcdonald Islands">Heard Island And Mcdonald Islands</option>
						<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
						<option value="Honduras">Honduras</option>
						<option value="Hong Kong">Hong Kong SAR</option>
						<option value="Hungary">Hungary</option>
						<option value="Iceland">Iceland</option>
						<option value="India">India</option>
						<option value="Indonesia">Indonesia</option>
						<option value="Iraq">Iraq</option>
						<option value="Ireland">Ireland</option>
						<option value="Israel">Israel</option>
						<option value="Italy">Italy</option>
						<option value="Jamaica">Jamaica</option>
						<option value="Japan">Japan</option>
						<option value="Jordan">Jordan</option>
						<option value="Kazakhstan">Kazakhstan</option>
						<option value="Kenya">Kenya</option>
						<option value="Kiribati">Kiribati</option>
						<option value="Korea">Korea</option>
						<option value="Kuwait">Kuwait</option>
						<option value="Kyrgyzstan">Kyrgyzstan</option>
						<option value="Lao People'S Democratic Republic">Lao People'S Democratic Republic</option>
						<option value="Latvia">Latvia</option>
						<option value="Lebanon">Lebanon</option>
						<option value="Lesotho">Lesotho</option>
						<option value="Liberia">Liberia</option>
						<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
						<option value="Liechtenstein">Liechtenstein</option>
						<option value="Lithuania">Lithuania</option>
						<option value="Luxembourg">Luxembourg</option>
						<option value="Macao">Macao SAR</option>
						<option value="Madagascar">Madagascar</option>
						<option value="Malawi">Malawi</option>
						<option value="Malaysia">Malaysia</option>
						<option value="Maldives">Maldives</option>
						<option value="Mali">Mali</option>
						<option value="Malta">Malta</option>
						<option value="Marshall Islands">Marshall Islands</option>
						<option value="Martinique">Martinique</option>
						<option value="Mauritania">Mauritania</option>
						<option value="Mauritius">Mauritius</option>
						<option value="Mayotte">Mayotte</option>
						<option value="Mexico">Mexico</option>
						<option value="Monaco">Monaco</option>
						<option value="Mongolia">Mongolia</option>
						<option value="Montserrat">Montserrat</option>
						<option value="Morocco">Morocco</option>
						<option value="Mozambique">Mozambique</option>
						<option value="Myanmar">Myanmar</option>
						<option value="Namibia">Namibia</option>
						<option value="Nauru">Nauru</option>
						<option value="Nepal">Nepal</option>
						<option value="Netherlands">Netherlands</option>
						<option value="Netherlands Antilles">Netherlands Antilles</option>
						<option value="New Caledonia">New Caledonia</option>
						<option value="New Zealand">New Zealand</option>
						<option value="Nicaragua">Nicaragua</option>
						<option value="Niger">Niger</option>
						<option value="Nigeria">Nigeria</option>
						<option value="Niue">Niue</option>
						<option value="Norfolk Island">Norfolk Island</option>
						<option value="Northern Mariana Islands">Northern Mariana Islands</option>
						<option value="Norway">Norway</option>
						<option value="Oman">Oman</option>
						<option value="Pakistan">Pakistan</option>
						<option value="Palau">Palau</option>
						<option value="Panama">Panama</option>
						<option value="Papua New Guinea">Papua New Guinea</option>
						<option value="Paraguay">Paraguay</option>
						<option value="Peru">Peru</option>
						<option value="Philippines">Philippines</option>
						<option value="Pitcairn">Pitcairn</option>
						<option value="Poland">Poland</option>
						<option value="Portugal">Portugal</option>
						<option value="Puerto Rico">Puerto Rico</option>
						<option value="Qatar">Qatar</option>
						<option value="Reunion">Reunion</option>
						<option value="Romania">Romania</option>
						<option value="Russian Federation">Russian Federation</option>
						<option value="Rwanda">Rwanda</option>
						<option value="Saint Helena">Saint Helena</option>
						<option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
						<option value="Saint Lucia">Saint Lucia</option>
						<option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option>
						<option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option>
						<option value="Samoa">Samoa</option>
						<option value="San Marino">San Marino</option>
						<option value="Sao Tome And Principe">Sao Tome And Principe</option>
						<option value="Saudi Arabia">Saudi Arabia</option>
						<option value="Senegal">Senegal</option>
						<option value="Serbia And Montenegro">Serbia And Montenegro</option>
						<option value="Seychelles">Seychelles</option>
						<option value="Sierra Leone">Sierra Leone</option>
						<option value="Singapore">Singapore</option>
						<option value="Slovakia">Slovakia</option>
						<option value="Slovenia">Slovenia</option>
						<option value="Solomon Islands">Solomon Islands</option>
						<option value="Somalia">Somalia</option>
						<option value="South Africa">South Africa</option>
						<option value="South Georgia And The South Sandwich Islands">South Georgia And The South Sandwich Islands</option>
						<option value="Spain">Spain</option>
						<option value="Sri Lanka">Sri Lanka</option>
						<option value="Sudan">Sudan</option>
						<option value="Suriname">Suriname</option>
						<option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option>
						<option value="Swaziland">Swaziland</option>
						<option value="Sweden">Sweden</option>
						<option value="Switzerland">Switzerland</option>
						<option value="Syrian Arab Republic">Syrian Arab Republic</option>
						<option value="Taiwan">Taiwan</option>
						<option value="Tajikistan">Tajikistan</option>
						<option value="Thailand">Thailand</option>
						<option value="Timor-Leste">Timor-Leste</option>
						<option value="Togo">Togo</option>
						<option value="Tokelau">Tokelau</option>
						<option value="Tonga">Tonga</option>
						<option value="Trinidad And Tobago">Trinidad And Tobago</option>
						<option value="Tunisia">Tunisia</option>
						<option value="Turkey">Turkey</option>
						<option value="Turkmenistan">Turkmenistan</option>
						<option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
						<option value="Tuvalu">Tuvalu</option>
						<option value="Uganda">Uganda</option>
						<option value="Ukraine">Ukraine</option>
						<option value="United Arab Emirates">United Arab Emirates</option>
						<option value="United Kingdom">United Kingdom</option>
						<option value="United States">United States</option>
						<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
						<option value="Uruguay">Uruguay</option>
						<option value="Uzbekistan">Uzbekistan</option>
						<option value="Vanuatu">Vanuatu</option>
						<option value="Venezuela">Venezuela</option>
						<option value="Viet Nam">Viet Nam</option>
						<option value="Wallis And Futuna">Wallis And Futuna</option>
						<option value="Western Sahara">Western Sahara</option>
						<option value="Yemen">Yemen</option>
						<option value="Zambia">Zambia</option>
						<option value="Zimbabwe">Zimbabwe</option>
						</select>        
							</div>
						</div>
						
						</div>
						<div style="" class="custom-form-row">
						<div class="custom-form-group text-left email email-sender">
							<label for="email">*Email</label>
							<div class="custom-form-field">
						<input class="form-control" id="email" name="mail" required="required" size="60" type="text" value="" aria-required="true" spellcheck="false" data-ms-editor="true">  
							</div>
						</div>
						</div>
						<div class="custom-form-row">
						<div class="custom-form-group text-left tel ">
							<label for="tel">Tel</label>
							<div class="custom-form-field">
						<input class="form-control" id="tel" name="number" size="20" type="text" value="" spellcheck="false" data-ms-editor="true">        
							</div>
						</div>
						</div>
						<div class="custom-form-row">
						<div class="custom-form-group text-left requested email-recipient">
							<label for="requested">*Requested</label>
							<div class="custom-form-field">
						<select class="form-control" id="requested" name="request" required="required" title="Requested"><option selected="selected" value="">-- Please Select --</option>
						<option value="General-Enquiries">General Enquiries</option>
						<option value="Talk to Managing Director">Talk to Managing Director</option>
						<option value="Public Relations and Media Enquiries">Public Relations &amp; Media Inquiries</option>
						<option value="Praise for Service or Team Member">Praise for a service or associate</option>
						<option value="Comments Regarding Your Hotel Experience">Comments Regarding Your Hotel Experience</option>
						<option value="Group Meeting Enquiries">Group Meeting Enquiries</option>
						<option value="Wedding and Event Enquiries">Wedding Planning Enquiries</option>
						<option value="Request-for-a-Service">Request for a Service</option>
						
						<option value="Restaurant Inquiries">Restaurant Enquiries</option>
						</select>         
							</div>
						</div>
						
						</div>
						<div style="" class="custom-form-row">
						<div class="custom-form-group text-left comment ">
							<label for="comment">*Query</label>
							<div class="custom-form-field">
						<textarea class="form-control" cols="50" id="comment" name="query" required="required" rows="5" spellcheck="false" data-ms-editor="true"></textarea>       
							</div>
						</div>
						
						</div>
						<div class="custom-form-row sub-clear-btn">
						<!-- <label class="input-imp-long" for="reason-age">reason-age</label><input class="input-imp-long" id="reason-age" name="reason-age" required="required" type="text" value="" aria-required="true" spellcheck="false" data-ms-editor="true"><span class="field-validation-valid" data-valmsg-for="reason-age" data-valmsg-replace="true"></span><input name="__hpKey" type="hidden" value="reason-age"> -->
						<input type="submit" class="btn btn-sub" name="submit" title="" value="Submit">
						
						<a href="#" class="clear-fields btn btn-clear" title="">Clear</a>
						</div>
						
						
						</form>
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
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>
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
	<script src="../js/sweetalert.min.js" type="text/javascript"></script>
	<script>
		function sweet() {
		swal("Your Enquiry is sent successfully", 
			{
				buttons: false,
				timer: 2000,
			});
		}
	</script>
</body>
</html>    
