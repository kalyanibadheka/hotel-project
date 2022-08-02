<!DOCTYPE html>
<html lang="en">
<?php
include("../pages/config.php"); 
require_once "controllerUserData.php"; 
error_reporting(0);  
session_start(); 
?>
<head>
    <meta charset="utf-8">
    <title>Restro - Resort Hotel </title>
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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        body{
            overflow-x:hidden;
        }
    </style>
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
            <div class="tab-content p-5">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">

                            <?php
                            require '../pages/config.php';
                                $selectquery = "select * from dishes ";
                                $query = mysqli_query($conn,$selectquery);
                                //$result = mysqli_fetch_array($query);
                                while ($result = mysqli_fetch_array($query)){
	

                                echo '<div class="col-lg-6">
                                    
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded"  style="width: 80px;" src="../admin/upload/dishes/'.$result['img'].'">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <h5><a href="cart.php?res_id='.$result['rs_id'].'">'.$result['title'].'</a></h5>
                                                <span class="text-primary" > '.$result['price'].'</span> 
                                            </h5>
                                            <small class="fst-italic">'. $result['slogan'].'</small>
                                        </div>
                                    </div>
                                </div>';
                                
                                
                            }
                            ?>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

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
