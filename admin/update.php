<?php
session_start();
include "config.php";

if(isset($_POST['submit']))
{
   $type = $_POST['type'];
   $price = $_POST['price'];
   $image = $_FILES['photo']['name'];
 $query = "INSERT INTO registration (type,price,pic) VALUES ('$type','$price','$image')";
$query_run = mysqli_query($con,$query);

if($query_run)
{
    $_SESSION['status']="image stored successfully";
    move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/".$_FILES["photo"]["name"]);
    header('location:display.php');
}
else{
    $_SESSION['status'] = "image not inserted.!";
}


}






if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $type = $_POST['type'];
    $price = $_POST['price'];

    $new_image = $_FILES['photo']['name'];
    $old_image = $_POST['image_old'];

    if($new_image != '')
    {
$update_filename = $_FILES['photo']['name'];

    }
    else
    {
$update_filename =$old_image;
    }
    if(file_exists("upload/" .$_FILES['photo']['name']))
    {
        $filename=$_FILES['photo']['name'];
        $_SESSION['status'] = "image already exists".$filename;
        header("location:display.php");
    }
    else{
        $query = "UPDATE registration SET type='$type',price='$price',pic='$update_filename' WHERE id='$id'";
        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            if($_FILES['photo']['name'] !='')
            {
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/".$_FILES["photo"]["name"]);
                unlink("upload/".$old_image);
            }
            $_SESSION['status'] = "updated";
            header("location: display.php");
        }else{
            $_SESSION['status'] = "not updated";
            header("location: room_edit.php");
        }
    }
    

}
?>
 