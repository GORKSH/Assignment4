<link rel="stylesheet" type="text/css" href="register.css">
<form action="testing.php">
<input type="submit" id="back_sub" value="Back To home">
</form>
<?php
require 'connect.php';
$name=$_POST['delname'];
$roll=$_POST['delroll'];
require 'core.php';
if(!empty($name) && !empty($roll))
{
$sql = "DELETE FROM student WHERE roll='$roll' AND student_name='$name' ";
if ($conn->query($sql) === TRUE)
 {
 	echo "<p>Student Deleted</p> ";
}
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else 
	echo "invalid";
?>
<style>
body
{
	background: url(back.jpg) no-repeat fixed 100% 100%;background-size:cover;
	color:white;
	
}
p{
	text-align:center;
	font-size:4vw;
	color:white;
}
#back_sub
{
	color:white;
	position:absolute;
	left:44vw;
	height:8vh;
	width:13vw;
	font-size:1.5vw;
	top:15vh;
	border-radius:0.6vw;
	background:green;
	border:none;
   cursor:	pointer
}
</style>