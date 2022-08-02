<?php
   session_start();
   if(!isset($_SESSION['adminlogin'])){
      header("location: login.php");
   }
?>
<?php
include ('config.php');

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Resort Hotel Admin</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!-- font awesome css -->
      <link rel="stylesheet" href="css/all.min.css">
      <!-- calendar file css -->
      <link rel="stylesheet" href="js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>
         .icon_info ul li a i{
            color:#000;
         }
         .logo_section img{
            height:36px;
         }
         .icon_info ul.user_profile_dd>li,.sidebar_toggle {
            background:#182149;

         }
      </style>
   </head>
   <body class="inner_page widgets">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="index.php"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png"
                                    alt="#" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <!-- <div class="user_img"><img class="img-responsive" src="images/layout_img/user_img.jpg" alt="#" /></div> -->
                            <div class="user_info">
                                <h6><?php echo $_SESSION['adminlogin']?></h6>
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <ul class="list-unstyled components">
                        <li>
                            <a href="index.php" data-toggle="collapse" aria-expanded="false"><i
                                    class="fas fa-home yellow_color"></i> <span>Home</span></a>
                            <!-- <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="dashboard.html">> <span>Default Dashboard</span></a>
                           </li>
                           <li>
                              <a href="dashboard_2.html">> <span>Dashboard style 2</span></a>
                           </li>
                        </ul> -->
                        </li>
                        <li><a href="reservation.php"><i class="fas fa-book orange_color"></i> <span>Rooms</span></a>
                        </li>
                        <!-- <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="general_elements.html">> <span>General Elements</span></a></li>
                           <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                           <li><a href="icons.html">> <span>Icons</span></a></li>
                           <li><a href="invoice.html">> <span>Invoice</span></a></li>
                        </ul>
                     </li> -->
                        <li><a href="user.php"><i class="fas fa-users purple_color2"></i> <span>User
                                    informations</span></a></li>
                        <!-- <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="email.html">> <span>Email</span></a></li>
                           <li><a href="calendar.html">> <span>Calendar</span></a></li>
                           <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                        </ul>
                     </li> -->
                        <li><a href="display.php"><i class="fas fa-list blue1_color"></i> <span>Room
                                    Catagories</span></a></li>
                        <li>
                            <a href="admin.php">
                                <i class="fas fa-user-shield red_color"></i> <span>Admins</span></a>
                        </li>
                        <!-- <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="profile.html">> <span>Profile</span></a>
                           </li>
                           <li>
                              <a href="project.html">> <span>Projects</span></a>
                           </li>
                           <li>
                              <a href="login.html">> <span>Login</span></a>
                           </li>
                           <li>
                              <a href="404_error.html">> <span>404 Error</span></a>
                           </li>
                        </ul>
                     </li> -->
                        <li><a href="enquiry.php"><i class="fas fa-bed purple_color2"></i> <span>Enquiries</span></a>
                        </li>
                        </li>
                        <li><a href="#events" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <i class="fas fa-file-alt green_color"></i> <span>Events</span></a>
                            <ul class="collapse list-unstyled" id="events">
                                <li>
                                    <a href="wed.php">> <span>Wedding</span></a>
                                </li>
                                <li>
                                    <a href="meet.php">> <span>Meeting</span></a>
                                </li>
                                <li>
                                    <a href="party-data.php">> <span>Parties</span></a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li><a href=""><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li> -->
                   
                        <!-- <li><a href="a_insertimages.php"><i class="fa fa-cog yellow_color"></i> <span>food add</span></a></li> -->
                        <li><a href="a_display.php"><i class="fas fa-utensils blue2_color"></i></i> <span>Dishes</span></a></li>
                        <li><a href="a_allorder.php"><i class="fas fa-concierge-bell purple_color"></i> <span>orders</span></a></li>
                                      </ul>
                </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg bg-white">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i
                                    class="fa fa-bars"></i></button>
                            <div class="logo_section">
                                <a href="index.php"><img class="img-responsive" src="images/logo/resort-logo.png"
                                        alt="#" /></a>
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-bell"></i><span class="badge">2</span></a></li>
                                        <li><a href="#"><i class="fas fa-exclamation-circle"></i></a></li>
                                        <li><a href="#"><i class="fas fa-envelope"></i><span class="badge">3</span></a>
                                        </li>
                                    </ul>
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown">
                                                <span class="name_user"><?php echo $_SESSION['adminlogin']?></span>
                                            </a>
                                            <form method="POST">
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="profile.html">My Profile</a>
                                                    <a class="dropdown-item" href="settings.html">Settings</a>
                                                    <a class="dropdown-item" href="help.html">Help</a>
                                                    <button class="dropdown-item" name="logout">Log Out <i
                                                                class="fas fa-sign-out-alt"></i></button>
                                                </div>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
               <?php
                  if(isset($_POST['logout']))
                  {
                     session_destroy();
                     echo "<script>window.location.href='login.php';</script>";
                  }
               ?>
                <!-- end topbar -->
                <h2 class="mt-5 text-center">Bookings for Meeting</h2>
               <Table class="table table-dark table-striped table-bordered text-center mt-5">
                  <tr>
                    <th>#</th>
                    <th>Reservor</th>
                    <th>Area</th>
                    <th>Prefered Date</th>
                    <th>Peoples</th>
                    <th>Tables</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  <?php 
                  $i=1;
                  $query ="SELECT * FROM birthday";
  $query_run = mysqli_query($con,$query);

  if(mysqli_num_rows($query_run)>0)
  {
     foreach($query_run as $row)
     {

     ?>
     <tr>
        <td><?= $i++ ?></td>
        <td><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
        <td><?php echo $row['area']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['people']; ?></td>
        <td><?php echo $row['tbl']; ?></td>
        <td></td>
        
       <td>
          <a href="" class="btn btn-success mr-2">Confirm</a>
          <a href="" type="button" name="" class="btn btn-danger">Denied</a>
     </td>
     </tr>
<?php

     }
  }
?>

               </Table>

            <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <!-- calendar file css -->    
      <script src="js/semantic.min.js"></script>
      <script></script>
   </body>
</html>
