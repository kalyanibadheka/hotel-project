<!DOCTYPE html>
<html lang="en">
<?php
include("../pages/config.php");
error_reporting(0);
session_start();

if(empty($_SESSION['email']))  
{
	header('location:login.php');
}
else
{
?>
<head>
    <meta charset="utf-8">
    <title>Restoran </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- restro Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- cart stylesheet -->
    <!-- <link rel="stylesheet" href="css/cart.css" > -->
</head>
<body class="bg-white">
<div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand pt-3 pb-3">
                    <!-- <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restro</h1> -->
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                    <img src="img/logo.png" alt="Logo" class="img-fluid w-50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <!-- <a href="service.html" class="nav-item nav-link">Service</a> -->
                        <a href="menu.php" class="nav-item nav-link">Menu</a>
                        <a href="your_orders.php" class="nav-item nav-link">Orders</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Book</a>
                            <div class="dropdown-menu m-0">
                                <a href="cart.php" class="dropdown-item">Order Food</a>
                                <a href="booking.html" class="dropdown-item">Book Table</a>
                                <!-- <a href="testimonial.html" class="dropdown-item">Testimonial</a> -->
                            </div>
                        </div>
                        <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                    </div>

                    


<?php if( isset($_SESSION['email']) && !empty($_SESSION['email']) )
{

?>
                    <a href="logout-user.php" class="btn btn-primary py-2 px-4">log out</a>
                    <?php }else {?>	
                    <a href="login-user.php" class="btn btn-primary py-2 px-4">log in</a>
                    <?php } ?>               
                </div>
            </nav>
    
            <section class="orders mt-5 pb-5">
				<div class="container">
					<div class="row">
					<table class="table table-bordered">
						  <thead class="bg-light">
							<tr>
							
							  <th>Dish</th>
							  <th>Quantity</th>
							  <th>Price</th>
							   <th>Status</th>
							     <th>Date</th>
								   <th>Action</th>
							  
							</tr>
						  </thead>
						  <tbody>
						  
						  
							<?php 
				
						$query_res= mysqli_query($conn,"select * from users_orders where u_id='".$_SESSION['id']."'");
												if(!mysqli_num_rows($query_res) > 0 )
														{
															echo '<td colspan="6"><center>You have No orders Placed yet. </center></td>';
														}
													else
														{			      
										  
										  while($row=mysqli_fetch_array($query_res))
										  {
						
							?>
												<tr>	
														 <td data-column="Item"> <?php echo $row['title']; ?></td>
														  <td data-column="Quantity"> <?php echo $row['quantity']; ?></td>
														  <td data-column="price">₹<?php echo $row['price']; ?></td>
														   <td data-column="status"> 
														   <?php 
																			$status=$row['status'];
																			if($status=="" or $status=="NULL")
																			{
																			?>
																			<button type="button" class="btn btn-info" style="font-weight:bold;"><span class="fa fa-bars"  aria-hidden="true" > Dispatch</button>
																		   <?php 
																			  }
																			   if($status=="in process")
																			 { ?>
																				<button type="button" class="btn btn-warning"><span class="fa fa-cog fa-spin"  aria-hidden="true" ></span> On The Way!</button>
																			<?php
																				}
																			if($status=="closed")
																				{
																			?>
																			 <button type="button" class="btn btn-success" ><span  class="fa fa-check-circle" aria-hidden="true"> Delivered</button> 
																			<?php 
																			} 
																			?>
																			<?php
																			if($status=="rejected")
																				{
																			?>
																			 <button type="button" class="btn btn-danger"> <i class="fa fa-close"></i> Cancelled</button>
																			<?php 
																			} 
																			?>
														   
														   
														   
														   
														   
														   
														   </td>
														  <td data-column="Date"> <?php echo $row['date']; ?></td>
														   <td data-column="Action"> <a href="delete_orders.php?order_del=<?php echo $row['o_id'];?>" onclick="return confirm('Are you sure you want to cancel your order?');" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fas fa-trash-alt"></i></a> 
															</td>
														 
												</tr>
												
											
														<?php }} ?>					
							
							
										
						
						  </tbody>
					</table>
					</div>
				</div>

            </section>


            <!-- <footer class="footer">
                    <div class="row bottom-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3 payment-options color-gray">
                                    <h5>Payment Options</h5>
                                    <ul>
                                        <li>
                                            <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-4 address color-gray">
                                    <h5>Address</h5>
                                    <p>213, Raheja Chambers, Free Press Journal Road, Nariman Point, Mumbai, Maharashtra 400021, India</p>
                                    <h5>Phone: +91 8093424562</a></h5> </div>
                                <div class="col-xs-12 col-sm-5 additional-info color-gray">
                                    <h5>Addition informations</h5>
                                   <p>Join thousands of other restaurants who benefit from having partnered with us.</p>
                                </div>
                            </div>
                        </div>
                    </div>
           
                </div>
            </footer> -->
        
        </div>
  
    
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>
<?php
}
?>