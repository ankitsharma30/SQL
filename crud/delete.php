<?php

  $id = $_GET['id'];
  $conn=mysqli_connect('localhost','pheuture','pheuture', 'pheuture');
  $a="DELETE from userdata WHERE id=" . $id;
  $sq=mysqli_query($conn,$a);
  header('location:data.php');

  
?>

