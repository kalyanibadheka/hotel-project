<?php
if(isset($_POST['submit']))
{
    echo "hello"'

}



<?php


session_start();
include 'config.php';
if(isset($_POST['submit']))
{
    $type =$_POST['type'];
    $price = $_POST['price'];
    $file  =$_FILES['photo'];
 
 // print_r($file);

$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];




  if($fileerror == 0){
      $destfile ='upload/'.$filename;
      move_uploaded_file($filepath,$destfile);
      $insertquery= " insert into registration(type,price,pic) values('$type','$price','$destfile')";

      $query = mysqli_query($con,$insertquery);
      if($query)
      {
        header("location: display.php");
      }
      else{
          echo "not inserted";
      }
      }
  

}



if(isset($_POST['update']))
{
$id = $_POST['id'];
$name = $_POST['type'];
$price = $_POST['price'];
$new_image = $_FILES['image']['name'];
$old_image = $_POST['image_old'];
if($new_image !='')
{
$update_filename = $_FILES['image']['name'];
}
else
{
$update_filename = $old_image;
}
$query = "UPDATE registration SET type='name', price='$price',pic='$update_filename' WHERE id='$id' ";
$query_run = mysqli_query($con, $query);

if($query_run)
{
    $_SESSION['status'] = "updated success";
    header("location: display.php");

}
else
{
    $_SESSION['status'] = "updated  not success";
    header("location: display.php");
}

}

















?>
