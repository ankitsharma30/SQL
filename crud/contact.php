<?php 
error_reporting(E_ALL);
ini_set('display_errors',1);
$con = mysqli_connect('localhost', 'pheuture', 'pheuture','pheuture');


$txtName = $_POST['Name'];
$txtEmail = $_POST['Email'];
$txtPhone = $_POST['Phone'];
$txtMessage = $_POST['Message'];

$sql = "INSERT INTO userdata(`name`, `email`, `phone`, `message`)  VALUES ('$txtName', '$txtEmail', $txtPhone, '$txtMessage')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
} 
else{
	echo($rs);
}
?>

