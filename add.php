<link rel="stylesheet" type="text/css" href="register.css">
<form action="testing.php">
<input type="submit" id="back_sub" value="Back To home">
</form>
<?php
require 'connect.php';
$name=$_POST['addname'];
$roll=$_POST['addroll'];
$age=$_POST['addage'];
require 'core.php';
if(!empty($name) && !empty($age) && !empty($roll))
{
$sql = "INSERT INTO student 
VALUES ('$name','$roll','$age','$_SESSION[username]')";
if ($conn->query($sql) === TRUE) {
    header("Location: testing.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else 
	echo "invalid";
?>