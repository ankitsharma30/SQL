<?php




$conn=mysqli_connect('localhost','pheuture','pheuture', 'pheuture'); 
$id = $_GET['id'];
$qry = mysqli_query($db,"select * from userdata where id='$id'"); 

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
  <input type="text" name="name" value="<?php echo $data['name'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Enter email" Required>
  <input type="text" name="phone" value="<?php echo $data['phone'] ?>" placeholder="Enter phone" Required>
  <input type="text" name="message" value="<?php echo $data['message'] ?>" placeholder="Enter message" Required>
  <input type="submit" name="update" value="Update">
</form>