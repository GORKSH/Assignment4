<link rel="stylesheet" type="text/css" href="register.css">
<form action="testing.php">
<input type="submit" id="back_sub" value="Back To home">
</form>
<?php
require 'connect.php';
$oldroll=$_POST['upoldroll'];
$name=$_POST['upname'];
$roll=$_POST['uproll'];
$age=$_POST['upage'];
require 'core.php';
if(!empty($name) && !empty($age) && !empty($roll))
{
$sql = "UPDATE student SET student_name='$name' , roll='$roll' ,age='$age' WHERE roll='$oldroll' ";

if ($conn->query($sql) === TRUE)
 {
 	echo "<p>Updated Successfully</p> ";
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
	font-size:2.5vw;
	color:white;
}
#back_sub
{
	color:white;
	position:absolute;
	left:44vw;
	height:9vh;
	width:13vw;
	font-size:1.5vw;
	top:15vh;
	border-radius:0.6vw;
	background:green;
	border:none;
   cursor:	pointer
}
</style>