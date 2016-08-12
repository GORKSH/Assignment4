<style>
body
{
	background: url(back.jpg) no-repeat fixed 100% 100%;background-size:cover;
	color:white;
	
}
a
{
	background:darkgreen;
    font-size:2vw;
    color:white;
    text-decoration:none;
     width:15vw;
}
</style>
<?php
$current_file=$_SERVER['SCRIPT_NAME'];
require 'connect.php';
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['emailid']) && isset($_POST['password']) && isset($_POST['repass']) )
   {
	
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$mail=$_POST['emailid'];
	$uname=$_POST['username'];
	$password=$_POST['password'];
	$passup=md5($password);
	$repassword=$_POST['repass'];
	$repassup=md5($repassword);
    if(!empty($fname) && !empty($lname) && !empty($mail) && !empty($uname)&& !empty($password)&& !empty($repassword) && $password==$repassword && $fname!="Firstname" && $lname!="Lasttname" && $mail!="Email id" && $password!="Password" && $repassword!="Re-enter Password" && $fname!="" && $lname!="" && $mail!="" && $password!="" && $repassword!="" && strpos($mail, '@') !== false && strpos($mail, '.') !== false)
	{
	 $sql = "INSERT INTO registertable 
	 VALUES ('$fname','$lname','$mail','$uname','$passup')";
	 if ($conn->query($sql) === TRUE) {
     echo "<p style='color:white;font-weight:bold;position:absolute;left:10vw;top:-2vh;font-size:2vw; '> Thankyou ".$fname." For Signing Up !!!! <P>";
     echo "<a  href=testing.php>SignIn</a>";
	 } 
	 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	}
	else 
		echo "<p style='color:red;font-size:1.3vw;position:absolute;top:50vh;left:2.5vw;background:white;border-radius:0.5vw;opacity:0.6;width:12vw;'><b >* Invalid Email Id</b> ►</p";
}
?>
<html>
<head>
<title>SIGN UP</title>
<meta charset='utf-8'>
<link rel="icon" href="favassign4.png">
<link rel="stylesheet" type="text/css" href="register.css">
<script>
function validateForm1() {
    var fn = document.forms["myForm"]["firstname"].value;
    var ln = document.forms["myForm"]["lastname"].value;
    var un = document.forms["myForm"]["username"].value;
    var mi = document.forms["myForm"]["emailid"].value;
    var pwd = document.forms["myForm"]["password"].value;
    var repwd = document.forms["myForm"]["repass"].value;        
    if (fn == null || fn == "" || fn=="Firstname") {     
        document.getElementById("ps1").innerHTML = "<b>* Required Field</b> ►" ;
        return false ;       
    }
    else if (ln == null || ln == "" || ln=="Lastname") {        
        document.getElementById("ps2").innerHTML = "<b>* Required Field</b> ►" ;
        return false ;        
    }
    else if (un == null || un == "" || un=="Username") {        
        document.getElementById("ps3").innerHTML = "<b>* Required Field</b> ►" ;
        return false ;        
    }
    else if (mi == null || mi == "" || mi=="Email id") {   
        document.getElementById("ps4").innerHTML = "<b>* Required Field</b> ►" ;
        return false ;        
    }   
    else if (pwd== null || pwd == "" || pwd=="Password") {
        document.getElementById("ps5").innerHTML = "<b>* Required Field</b> ►" ;
        return false ;
      }
    else if (repwd == null || repwd == "" || repwd=="Re-Enter Password") 
    {
     document.getElementById("ps6").innerHTML = "<b>* Required Field</b> ►" ;
        return false ;
   }
         else if(repwd != pwd)
        {
        	document.getElementById("ps6").innerHTML = "<b>* Not Matched </b> ►" ;
            return false ;
        }
}	
</script>
</head>
<body>
<p id="s_up"><b>Sign Up</b></p>
<div id="div_back">
</div>
<img src="bot.png" />
<p id="ps1" ></p>
<p id="ps2"></p>
<p id="ps3"></p>
<p id="ps4"></p>
<p id="ps5"></p>
<p id="ps6"></p>
<p id="ps7"></p>
<p id="same1">*</p>
<p id="same2">*</p>
<p id="same3">* Password In Both The Fields Should Be Same.</p>
<form name="myForm" onsubmit="return validateForm1()" action="<?php echo $current_file ; ?>" method="post">
 <input type="text" id="fname" name="firstname" placeholder= "Firstname" value ="<?php  if (isset($fname))  echo $fname; ?>" />
 <input type="text" id="lname" name="lastname" placeholder= "Lastname" value ="<?php  if (isset($lname))  echo $lname; ?>" />
<input type="text" id="uname" name="username" placeholder= "Username" value ="<?php  if (isset($uname))  echo $uname; ?>" />
<input type="text" id="mail" name="emailid" placeholder= "Email id" value ="<?php  if (isset($mail))  echo $mail; ?>" />
 <input type="password" id="pass" name="password"  placeholder= "Password" value ="<?php  if (isset($password))  echo $password; ?>" />
<input type="password" id="repass" name="repass" placeholder= "Re-Enter Password" value ="<?php  if (isset($repassword))  echo $repassword; ?>" />
<input style="cursor:pointer;" type="submit" id="sub" value="REGISTER" />
</form>
</body>
</html>