<?php
session_start();
include "config.php";

if(isset($_POST['submit']))
{
    $rs_id = $_POST['rs_id'];
   $type = $_POST['title'];
   $price = $_POST['price'];
   $slogan = $_POST['slogan'];
   $image = $_FILES['photo']['name'];
 $query = "INSERT INTO dishes (rs_id,title,slogan,price,img) VALUES ('$rs_id','$type','$slogan','$price','$image')";
$query_run = mysqli_query($con,$query);

if($query_run)
{
    $_SESSION['status']="image stored successfully";
    move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/dishes/".$_FILES["photo"]["name"]);
    header('location:a_display.php');
}
else{
    $_SESSION['status'] = "image not inserted.!";
}


}


?>