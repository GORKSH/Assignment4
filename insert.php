<link rel="stylesheet" type="text/css" href="register.css">
<style>
body
{
	color:white;
	font-size:3vw;
}
#back_sub
{
	position:absolute;
	top:15vh;
	left:5vw;
	height:8vh;
	width:20vw;
	font-size:1.2vw;
	background:darkgreen;
	color:white;
    border-radius:0.5vw;
    border:none;
}



</style>










<form action="testing.php">
<input type="submit" id="back_sub" value="Back To home">
</form>
<?php

$host = 'localhost' ;
$user = 'root';
$pass ='';
$mydatabase ='a_database';
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$mail=$_POST['emailid'];
$uname=$_POST['username'];
$password=$_POST['password'];
$passup=md5($password);

$repassword=$_POST['repass'];
$repassup=md5($repassword);



@mysqli_connect($host, $user , $pass , $mydatabase ) or die ('connection failed');
$conn=mysqli_connect($host, $user , $pass , $mydatabase );

if(!empty($fname) && !empty($lname) && !empty($mail) && !empty($uname)&& !empty($password)&& !empty($repassword) && $password==$repassword)
{
$sql = "INSERT INTO registertable 
VALUES ('$fname','$lname','$mail','$uname','$passup')";

if ($conn->query($sql) === TRUE) {
    echo " Thankyou ".$fname." For Signing Up !!!!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else 
	echo "invalid";



?>