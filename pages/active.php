   <?php

   /*session_start();
   include 'config.php';

   if(isset($_GET['token']))
   {
      $token = $_GET['token'];
      $updatequery = "update users set status='active' where token='$token' ";
  $query = mysqli_query($conn,$updatequery);
  if($query)
  {
     if(isset($_SESSION['msg'])){
        $_SESSION['msg'] = "Account updated successfully";
        header('location:events.html');

      }else{
         $_SESSION['msg'] = "you are logged out.";
         header('location: \resort project\index.html');
      
      }
  }else{
           $_SESSION['msg'] = "account not updated";
     header('location: \resort project\index.html');
   }
   }
   */
require("config.php");

if(isset($_GET['email']) && isset($_GET['token']))
{
   $query="SELECT * FROM 'users' WHERE 'email'='$_GET[email]' AND 'token'='$_GET[token]'";
   $result=mysqli_query($conn,$query);
   if($result)
   {
      if(mysqli_num_rows($result)==1)
      {
$result_fetch=mysqli_fetch_assoc($result);
if($result_fetch['is_verified']==0)
   {
$update="UPDATE 'users' SET 'is_verified'='1' WHERE 'email'='$result_fetch[email]'";
if(mysqli_query($conn,$update)){
   echo"
      <script>
      alert('email verification success');
      window.location.href='index.php';
      </script>
      ";

   }
   else{
      echo"
      <script>
      alert('cannot run query');
      window.location.href='index.php';
      </script>
      ";
   }
   }
}
      }
   }
?>


