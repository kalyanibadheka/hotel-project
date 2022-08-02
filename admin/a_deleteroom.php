<?php

require("config.php");

if(isset($_POST['delete'])){
    $id=$_POST['d_id'];

    $query="DELETE FROM `dishes` WHERE d_id='$id' ";
    $query_run=mysqli_query($con,$query);

    if($query_run){
        echo '<script>alert("The data has been deleted");</script>';
        header("location:a_display.php");
    }
    else{
        echo '<script>alert("The data is not deleted");</script>';
    }
}
?>