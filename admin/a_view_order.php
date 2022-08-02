<?php
   session_start();
   if(!isset($_SESSION['adminlogin'])){
      header("location: login.php");
   }

   include "config.php";
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
    .icon_info ul li a i {
        color: #000;
    }

    .logo_section img {
        height: 36px;
    }

    .icon_info ul.user_profile_dd>li,
    .sidebar_toggle {
        background: #182149;

    }
    </style>
    <script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+1000+',height='+1000+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
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
                                <a href="display.php"><img class="img-responsive" src="images/logo/resort-logo.png"
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



<body>
    
    <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div> -->
   
    <div id="main-wrapper">

        <!-- <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.php">
                        
                        <span><img src="images/food-mania-logo.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <div class="navbar-collapse">
       
                    <ul class="navbar-nav mr-auto mt-md-0">

                    </ul>
     
                    <ul class="navbar-nav my-lg-0">

                       
               
                        <li class="nav-item dropdown">
                           
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                 
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/bookingSystem/3.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="left-sidebar">
        
            <div class="scroll-sidebar">
         
                <nav class="sidebar-nav">
                   <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="dashboard.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                        <li class="nav-label">Log</li>
                        <li> <a href="all_users.php">  <span><i class="fa fa-user f-s-20 "></i></span><span>Users</span></a></li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Restaurant</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_restaurant.php">All Restaurants</a></li>
								<li><a href="add_category.php">Add Category</a></li>
                                <li><a href="add_restaurant.php">Add Restaurant</a></li>
                                
                            </ul>
                        </li>
                      <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery" aria-hidden="true"></i><span class="hide-menu">Menu</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_menu.php">All Menues</a></li>
								<li><a href="add_menu.php">Add Menu</a></li>
                              
                                
                            </ul>
                        </li>
						 <li> <a href="all_orders.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Orders</span></a></li>
                         
                    </ul>
                </nav>
          
            </div>
     
        </div> -->
    
        <div class="page-wrapper">
        
            
    
            <div class="container-fluid">
     
                <div class="row">
                    <div class="col-12">
                        
                   
                        <div class="col-lg-12">
                        <div class="card card-outline-primary p-4">
                            <!-- <div class="card-header"> -->
                                <h4 class="m-b-0 text-dark text-center">View Order</h4>
                            <!-- </div> -->
                             
                                <div class="table-responsive m-t-20">
                                    <table id="myTable" class="table table-dark table-bordered table-striped">
                                       
                                        <tbody>
                                           <?php
											$sql="SELECT usertable.*, users_orders.* FROM usertable INNER JOIN users_orders ON usertable.id=users_orders.u_id where o_id='".$_GET['user_upd']."'";
												$query=mysqli_query($con,$sql);
												$rows=mysqli_fetch_array($query);
												
												
																		
												?>
											
											<tr>
													<td><strong>Username:</strong></td>
												    <td><center><?php echo $rows['name']; ?></center></td>
													   <td><center>
													   <a href="javascript:void(0);" onClick="popUpWindow('a_order_update.php?form_id=<?php echo htmlentities($rows['o_id']);?>');" title="Update order">
															 <button type="button" class="btn btn-primary">Update Order Status</button></a>
															 </center>
											 </td>
												  
																																					
											</tr>	
											<tr>
												<td><strong>Dish:</strong></td>
												    <td><center><?php echo $rows['title']; ?></center></td>
													    <td><center>
													   <a href="javascript:void(0);" onClick="popUpWindow('a_userprofile.php?newform_id=<?php echo htmlentities($rows['o_id']);?>');" title="Update order">
														<button type="button" class="btn btn-primary">View User Detials</button></a>
											
													   </center></td>
												   																								
											</tr>	
											<tr>
													<td><strong>Quantity:</strong></td>
												    <td><center><?php echo $rows['quantity']; ?></center></td>
													  
												   																							
											</tr>
											<tr>
													<td><strong>Price:</strong></td>
												    <td><center>₹<?php echo $rows['price']; ?></center></td>
													   
												   																							
											</tr>
											<tr>
													<td><strong>Address:</strong></td>
												    <td><center><?php echo $rows['address']; ?></center></td>
													  
												   																							
											</tr>
											<tr>
													<td><strong>Date:</strong></td>
												     <td><center><?php echo $rows['date']; ?></center></td>
													  
												   																							
											</tr>
											<tr>
													<td><strong>Status:</strong></td>
    <?php 
        $status=$rows['status'];
        if($status=="" or $status=="NULL")
        {
        ?>
        <td> <center><button type="button" class="btn btn-info" style="font-weight:bold;"><span class="fa fa-bars"  aria-hidden="true" > Dispatch</button></center></td>
        <?php 
            }
            if($status=="in process")
            { ?>
        <td>   <center><button type="button" class="btn btn-warning"><span class="fa fa-cog fa-spin"  aria-hidden="true" ></span>On a Way!</button></center></td> 
        <?php
            }
        if($status=="closed")
            {
        ?>
        <td>  <center><button type="button" class="btn btn-success" ><span  class="fa fa-check-circle" aria-hidden="true"> Delivered</button></center></td> 
        <?php 
        } 
        ?>
        <?php
        if($status=="rejected")
            {
        ?>
        <td>  <center><button type="button" class="btn btn-danger"> <i class="fa fa-close"></i> Cancelled</button> </center></td> 
        <?php 
        } 
        ?>
        	   																							
											</tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						 </div>
                      
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
          
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
  
        
        </div>
       
    </div>
    
    <script src="js/lib/jquery/jquery.min.js"></script>
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
</body>

</html>