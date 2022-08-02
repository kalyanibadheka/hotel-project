<?php
include("config.php");
error_reporting(0);
session_start();

mysqli_query($con,"DELETE FROM users_orders WHERE o_id = '".$_GET['order_del']."'");
header("location:a_allorder.php");  

?>
