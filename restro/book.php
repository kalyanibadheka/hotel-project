<?php


if(isset($_POST['submit'])) 
    {
	
        $fname=$_POST['name'];
       
       
      
      
        $email=$_POST['email'];
        $number=$_POST['number'];
        $date=$_POST['datetime'];
        $people=$_POST['people'];
        $request=$_POST['request'];

		
		
		
		

$_SESSION['fname'] = $fname;
$_SESSION['lname'] = $lname;
$_SESSION['address'] = $address;
$_SESSION['email'] = $email;
$_SESSION['checkin'] = $checkin;
$_SESSION['checkout'] = $checkout;
$_SESSION['nrooms'] = $rooms;
 $_SESSION['total'] = $_SESSION['price'] * $rooms + 5;
 $_SESSION['bed'] = $_SESSION['beds'] * $rooms; 
$bed = $_SESSION['bed'];
$total = $_SESSION['total'];

        $sql="INSERT INTO `room`(`room_id`,`type`,`fname`, `lname`, `address`, `city`, `zip`, `email`, `number`,`nrooms`, `tbeds`,`checkin`, `checkout`,`pay`,`total`) VALUES ('$id','$type','$fname','$lname','$address','$city','$zip','$email','$number','$rooms','$bed','$checkin','$checkout','$pay','$total')";

        $result= mysqli_query($con,$sql);
		
		
        if($result){
			header('Location:../paytm.php');
        }
        else{
            echo "not inserted ". mysqli_error($con);
        }

    }
    ?>