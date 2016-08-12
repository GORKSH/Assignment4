<html>
<head>
<title>SIGN IN</title>
<meta charset='utf-8'>
<link rel="icon" href="favassign4.png">
<link rel="stylesheet" type="text/css" href="register.css">
<script>
function validateForm1() {
    var x = document.forms["myForm"]["username"].value;
    var y = document.forms["myForm"]["pass"].value;
    if (x == null || x == "" || x=="Username") {    
        document.getElementById("p1").innerHTML = "<b>* Required Field  </b>  " ;
        return false ;
        }
    else if (y == null || y == "" || y=="Password") {     
        document.getElementById("p2").innerHTML = "<b>* Required Field</b>  " ;
        return false ;
          }
}	
</script>
</head>
<body>
<h1 align="center">Login Form</h1>
<p id="s_in"><b>Log In</b></p>
<div id="div_back_signin">
</div>
<img src="bot.png" />
<p id="p1"></p>
<p id="p2"></p>
<form name="myForm" action="<?php echo $current_file ; ?>" onsubmit="return validateForm1()" method="post">
<input type="text" id="user_name" name="username" placeholder= "Username" value ="<?php  if (isset($username))  echo $username;?>"/><br /><br />
 <input type="password" id="pass_user" name="pass" placeholder= "Password" value ="<?php  if (isset($username))  echo $password;?>" /><br /><br />
<input style="cursor:pointer;" type="submit" id="login" value="LOG IN">
</form>
<form action="signup.php">
<input style="cursor:pointer;" type="submit" id="sign_up" value="Sign Up">
</form>
<p id="need">Need new account ?</p>
</body>
</html>
<?php
require 'connect.php';
if(isset($_POST['username']) && isset($_POST['pass']))
{
	$username=$_POST['username'];
	$password=$_POST['pass'];
	$pass_md=md5($password);
    if(!empty($username) && !empty($password) && $username!="Username" && $password!="Password")
    	{          
   		    $sql = "SELECT firstname, lastname,email_id, username FROM registertable where username='$username' AND password='$pass_md'";
    		$result = mysqli_query($conn, $sql);
    		$row = $result->fetch_assoc();
    		$firstname= $row["firstname"];
            $lastname= $row["lastname"];
            $email_id= $row["email_id"];
            if (mysqli_num_rows($result) == 0)
            	echo "<p style='position:absolute;left:2vw;top:2vh;' >No Such Record Exist !!!<br>Sign In Again</p>";
            else if (mysqli_num_rows($result) == 1)
            {
            	$_SESSION['username']=$username; 
            	$_SESSION['pass']=$password;                	
            	header('Location: testing.php');
            }
    	}
    	else
    	{
            echo "vo";
    	}
}
?>