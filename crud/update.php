<?php


$conn=mysqli_connect('localhost','pheuture','pheuture', 'pheuture'); 
$id = $_GET['id'];
$qry = mysqli_query($conn,"select * from userdata where id='$id'"); 

$data = mysqli_fetch_array($qry); 

if(isset($_POST['update'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact=$_POST['phone'];
    $message=$_POST['message'];
	
    $edit = mysqli_query($conn,"update userdata set name='$name', email='$email', phone='$contact', message='$message' where id='$id'");
	
    if($edit)
    {
        mysqli_close($conn); 
        header("location:data.php"); 
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>


<form method="POST">
    <body style="background-color: #800000">
</body>
  NAME<br><input type="text" name="name" value="<?php echo $data['name']; ?>"  Required><br>
  EMAIL<br><input type="text" name="email" value="<?php echo $data['email']; ?>"  Required><br>
  CONTACT<br><input type="text" name="phone" value="<?php echo $data['phone']; ?>" Required><br>
  MESSAGE<br><input type="text" name="message" value="<?php echo $data['message']; ?>"  Required><br>
  <input type="submit" name="update" value="Update">
</form>