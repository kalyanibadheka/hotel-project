<!DOCTYPE html>
<html lang="en">
<?php
include("../pages/config.php");
include_once 'product-action.php';
error_reporting(0);
session_start();

function function_alert() { 
      

    echo "<script>alert('Thankyou! Your Order Placed successfully!');</script>"; 
    echo "<script>window.location.replace('your_orders.php');</script>"; 
} 

$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
else
{ 
    $usertable = "select id from usertable where email = '".$_SESSION['email']."'";
    $query = mysqli_query($conn,$usertable);
    $result = mysqli_fetch_array($query);
    // echo $result['id'];			
    $_SESSION['id'] = $result['id'];				  

												foreach ($_SESSION["cart_item"] as $item)
												{
											
												$item_total += ($item["price"]*$item["quantity"]);
												
													if($_POST['submit'])
													{
						
													$SQL="insert into users_orders(u_id,title,quantity,price) values('".$_SESSION["id"]."','".$item["title"]."','".$item["quantity"]."','".$item["price"]."')";
						
														mysqli_query($conn,$SQL);
														
                                                        
                                                        unset($_SESSION["cart_item"]);
                                                        unset($item["title"]);
                                                        unset($item["quantity"]);
                                                        unset($item["price"]);
														$success = "Thankyou! Your Order Placed successfully!";

                                                        function_alert();

														
														
													}
												}
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
    <link rel="stylesheet" href="css/cart.css" >
    <style>
       .bg-secondary{
           background-color: #dae1e7 !important;
       }
       .summary-box{
           font-size: 18px;
           line-height: 2;
       }
       .form-check-input{
           margin-top: 8px !important;
       }
    </style>
</head>
<body>
    <section class="nav">
                <!-- Navbar & Hero Start -->
                <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand pt-3 pb-3">
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
                        <a href="about.php" class="nav-item nav-link">About</a>
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
        </div>        
    </section>

    <div class="container">
                 
					   <span style="color:green;">
								<?php echo $success; ?>
										</span>
					
                </div>
    <!-- summary -->
    <section class="summary mt-4">
        <div class="container">
            <div class="row">
                <div class="summary-box bg-white p-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex flex-wrap  bg-secondary ">
                            <div class="col-12 text-center fs-4 fw-bold">Cart Summary</div>
                        </li>
                        <li class="list-group-item d-flex flex-wrap">
                            <div class="col-8">Cart Subtotal</div>
                            <div class="col-4"> <?php echo "₹".$item_total; ?>
                            </div>
                        </li>
                        
                        <li class="list-group-item d-flex flex-wrap">
                            <div class="col-8">Delivery Charges</div>
                            <div class="col-4">Free</div>
                        </li>
                        <li class="list-group-item d-flex flex-wrap">
                            <div class="col-8">Total</div>
                            <div class="col-4"><?php echo "₹".$item_total; ?>
                            </div>
                        </li>
                        <!-- <li class="list-group-item"></li> -->
                      </ul>
                      <div class="payment">
                          <h5 class="text-center">Payment Method</h5>
                          <form action="" method="Post">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mod" id="flexRadioDefault2" checked value="COD">
                                <label class="form-check-label" for="flexRadioDefault2">
                                Cash on Delivery
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mod" id="flexRadioDisabled" disabled>
                                <label class="form-check-label" for="flexRadioDisabled">
                                  Online Payment
                                </label>
                              </div>

                              <div class="col-12 text-center">
                              <input type="submit" onclick="return confirm('Do you want to confirm the order?');" class="btn btn-cart w-100 " name="submit" value="Order Now">
                              <!-- <p class="text-xs-center"> <input type="submit" onclick="return confirm('Do you want to confirm the order?');" name="submit"  class="btn btn-outline-success btn-block" value="Order now"> </p> -->
                            </div>
                          </form>
                      </div>
                </div>
            </div>
        </div>
    </section>
    </body>
    </html>
    <?php
}
?>