<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";

if(isset($_GET['fname'])){
  $fname = $_GET['fname'];
}else{
  $fname="";
}
if(isset($_GET['lname'])){
  $lname = $_GET['lname'];
}else{
  $lname="";
}
if(isset($_GET['User_id'])){
  $User_id = $_GET['User_id'];
}else{
  $User_id="";
}
if(isset($_GET['email'])){
  $email = $_GET['email'];
}else{
  $email="";
}

$fname = isset($_GET['fname']) ? $_GET['fname'] : "";
$lname = isset($_GET['lname']) ? $_GET['lname'] : "";
$User_id = isset($_GET['User_id']) ? $_GET['User_id'] : "";
$email = isset($_GET['email']) ? $_GET['email'] : "";

session_start();

$_SESSION['fname']=$fname;
$_SESSION['lname']=$lname;
$_SESSION['User_id']=$User_id;
$_SESSION['email']=$email;
include 'registration form.php';
?>

