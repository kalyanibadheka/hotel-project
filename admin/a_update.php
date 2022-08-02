<?php

include "config.php";

if(isset($_POST['update']))
{
    $id = $_POST['d_id'];
    $title = $_POST['title'];
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
    if(file_exists("upload/dishes/" .$_FILES['photo']['name']))
    {
        $filename=$_FILES['photo']['name'];
        $_SESSION['status'] = "image already exists".$filename;
        header("location:a_display.php");
    }
    else{
        $query = "UPDATE dishes SET title='$title',price='$price',img='$update_filename' WHERE d_id='$id'";
        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            if($_FILES['photo']['name'] !='')
            {
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/dishes/".$_FILES["photo"]["name"]);
                unlink("upload/dishes/".$old_image);
            }
            $_SESSION['status'] = "updated";
            header("location: a_display.php");
        }else{
            $_SESSION['status'] = "not updated";
            header("location: a_room_edit.php");
        }
    }
    

}
?>
 