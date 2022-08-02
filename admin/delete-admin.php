<?php

require("config.php");

if(isset($_POST['delete'])){
    $id=$_POST['id'];

    $query="DELETE FROM `admin` WHERE id='$id' ";
    $query_run=mysqli_query($con,$query);

    if($query_run){
        echo '<script>alert("The data has been deleted");</script>';
        header("location:admin.php");
    }
    else{
        echo '<script>alert("The data is not deleted");</script>';
    }
}
?>