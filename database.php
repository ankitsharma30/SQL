<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
?>
<!DOCTYPE html>
<html>
<head>die($data['id']);
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form </title>
</head>

<body>
<fieldset>
<legend>Contact Form</legend>
<form name="frmContact" method="POST" action="contact.php">
<p>
<label for="Name">Name </label>
<input type="text" name="Name" id="Name">
</p>
<p>
<label for="email">Email</label>
<input type="text" name="Email" id="Email">
</p>
<p>
<label for="phone">Phone</label>
<input type="text" name="Phone" id="Phone">
</p>
<p>
<label for="message">Message</label>
<textarea name="Message" id="Message"></textarea>
</p>
<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</np>
</form>
</fieldset>
</body>
</html>