
<?php

session_start();
if(isset($_SESSION['fname'])){
  $fname = $_SESSION['fname'];
}else{
  $fname="";
}

if(isset($_SESSION['lname'])){
    $lname = $_SESSION['lname'];
  }else{
    $lname="";
  }
  
  if(isset($_SESSION['User_id'])){
    $User_id = $_SESSION['User_id'];
  }else{
    $User_id="";
  }
  
  if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
  }else{
    $email="";
  }
include 'registration form.php';


?>


