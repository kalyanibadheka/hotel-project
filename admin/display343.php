<html>
    
<body>

<table>
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
$selectquery = "select * from registration ";
$query = mysqli_query($con,$selectquery);
//$result = mysqli_fetch_array($query);
while ($result = mysqli_fetch_array($query)){
  ?> 
  
<tr>
    <td> <?php echo $result['id']; ?> </td>
    <td> <?php echo $result['type']; ?> </td>
    <td> <?php echo $result['price']; ?> </td>
    <td> <img src="<?php echo $result['pic']; ?>" width="200" height="100">  </td>

</tr>

<a href="insertimages.php" type="button" name="add">ADD ROOMS</a>


  <?php
  }
  ?>

</tbody>
</table>


</body>
</table>