<!DOCTYPE html>
<html lang="en">
    
<?php
include("../pages/config.php"); 
error_reporting(0);
session_start();

include_once 'product-action.php'; 

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
</head>
<body>
<div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
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
    <section class="head-slider">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="slide-caption">
                    <h2>Order Food</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-over -->
    <section class="list py-100">
        <div class="container">
            <div class="row">
                <div class="col-4 cart">
                    <div class="card">
                        <div class="card-header">
                          Your Cart
                        </div>
                        <div class="added-item">
                            
									
                        <?php

$item_total = 0;

foreach ($_SESSION["cart_item"] as $item)  
{
?>		

                            <div class="name-row mb-3">
                            <?php echo $item["title"]; ?><a href="cart.php?res_id=<?php echo $_GET['res_id']; ?>&action=remove&id=<?php echo $item["d_id"]; ?>" >
                               <i class="fas fa-trash-alt"></i></a>
                            </div>
                            <div class="price-inputs d-flex flex-wrap">
                                <div class="col-8">
                                    <input type="text" value=<?php echo "₹".$item["price"]; ?> readonlyreadonly class="form-control">
                                </div>
                                <div class="col-4">
                                    <input type="text" value='<?php echo $item["quantity"]; ?>' readonly class="form-control">
                                </div>
                            </div>
                            <?php
                                $item_total += ($item["price"]*$item["quantity"]); 
                                }
                                ?>								  
                        </div>
                        <div class="card-footer">
                            <span>Total</span>
                            <h3 class="mt-3 "><strong><?php echo "₹".$item_total; ?></strong></h3>
                            <p class="mb-2">Free Delivery!!!</p>
                            <?php
                                        if($item_total==0){
                                        ?>

                            <a href="ckout.php?res_id=<?php echo $_GET['res_id'];?>&action=check" class="btn btn-cart">CheckOut</a>
                            <?php
                                        }
                                        else{
                                            ?>
                                 <a href="ckout.php?res_id=<?php echo $_GET['res_id'];?>&action=check" class="btn btn-cart">CheckOut</a>             
                                <?php        
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-8 menu">
                    <div class="menu-head">
                    <h3>Menu</h3>
                    </div>
                    <div class="col-12">
                    <ul class="cards">
					<?php  
									$stmt = $conn->prepare("select * from dishes where rs_id='$_GET[res_id]'");
									$stmt->execute();
									$products = $stmt->get_result();
									if (!empty($products)) 
									{
									foreach($products as $product)
										{
                    ?>
                    <li>
                    <form method="post" action='cart.php?res_id=<?php echo $_GET['res_id'];?>&action=add&id=<?php echo $product['d_id']; ?>'>
                            <a href="javascript:void(0)" class="card">
                              <img src="/project/admin/upload/dishes/<?php echo $product['img'];  ?>" class="card__image" alt="" />
                              <div class="card__overlay">
                                <div class="card__header">
                                  <div class="card__header-text">
                                    <h3 class="card__title"><?php echo $product['title']; ?></h3>            
                                    <span class="card__status"><?php echo $product['price']; ?></span>
                                  </div>
                                </div>
                                <p class="card__description"> <?php echo $product['slogan']; ?></p>
                                <div class="cart-inputs">
                              
                                  <input type="text" name="quantity" class="w-10" value="1" size="2">
                                  <input type="submit" class="btn btn-cart " value="Add to Cart">
                              </div>
                              </div>
                              </form>  
                            </a>  
                                         
                          </li>                        
                       
<?php
                                        }
                                    }
                                    ?>
					</ul>		
                </div>
            </div>
        </div>
    </section>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    
</body>

</html>