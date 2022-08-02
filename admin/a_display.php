<?php
   session_start();
   if(!isset($_SESSION['adminlogin'])){
      header("location: login.php");
   }
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
               
<a href="a_insertimages.php" type="button" class="btn btn-secondary mt-4 mb-4" name="add">ADD Dishes</a>
<!-- <table>
   <thead>
       <tr>



</tr>
<th>id</th>
<th>type</th>
<th>price</th>
<th>pic</th>
</tr>
</thead>

<tbody>
<?php
include 'config.php';

// $selectquery = "select * from registration ";
// $query = mysqli_query($con,$selectquery);
// //$result = mysqli_fetch_array($query);
// while ($result = mysqli_fetch_array($query)){
 ?> 
 
<tr>
   <td> <?php //echo $result['id']; ?> </td>
   <td> <?php //echo $result['type']; ?> </td>
   <td> <?php //echo $result['price']; ?> </td>
   <td> <img src="../admin/upload/<?php //echo $result['pic']; ?>" width="200" height="100">  </td>

</tr>



 <?php
//  }
 ?>

</tbody>
</table> -->
                <!-- Table Panel -->
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Image</th>
									<th class="text-center">Dishes</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$cats = $con->query("SELECT * FROM dishes order by d_id asc");
								while($row=$cats->fetch_assoc()):
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>

								
									<td class="text-center">
										<img src="../admin/upload/dishes/<?php echo isset($row['img']) ? ''.$row['img'] :'' ?>" alt="" id="cimg">
									</td>
									<td class="">
										<p>Name : <b><?php echo $row['title'] ?></b></p>
										<p>Price : <b><?php echo $row['price'] ?></b></p>
									</td>
									<td class="text-center d-flex justify-content-center">
                           <form action="room_edit.php" method="POST">
                           <input type="hidden" name="edit_id" value="<?php echo $row['d_id'] ?>">
             
                          <a href="a_room_edit.php?d_id=<?php echo $row['d_id'];?>" class="btn btn-sm btn-primary edit_cat mr-2"> EDIT </a>

                        </form>
                        <form action="a_deleteroom.php" method="POST">
                           <input type="hidden" name="d_id" value="<?php echo $row['d_id']; ?>">
                           <input type="Submit" name="delete" class="btn btn-sm btn-danger" value="Delete"/>
                        </form>
            
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	img#cimg,.cimg{
		max-height: 10vh;
		max-width: 6vw;
	}
	td{
		vertical-align: middle !important;
	}
</style>
 
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
