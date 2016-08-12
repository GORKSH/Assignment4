<?php
require 'connect.php';
require 'core.php';
$sp="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
if(!isset($_SESSION['username']) || $_SESSION['username'] !="admin")
header('Location:testing.php');
else if(isset($_POST['firstname']) && isset($_POST['lastname']))
   {
	
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
    if(!empty($fname) && !empty($lname))
	{
	  echo "<p id='topic'>Students Under Professor $fname $lname </p><br>";
	  echo "$sp Name $sp &nbsp;&nbsp;&nbsp; $sp Roll $sp $sp &nbsp;&nbsp;&nbsp;Age <br><br>" ;
	  $sqlstu = "SELECT student_name , roll ,age FROM student where prof_name='$fname'";
      $result = $conn->query($sqlstu);
     
      if ($result->num_rows > 0) 
      {
      $_SESSION['firstname']=$fname;	
      while($row = $result->fetch_assoc())
       {
        echo "<span id='s1'>$row[student_name] </span> <span id='s2'>$row[roll] </span> <span id='s3'>$row[age] </span><br>";
       }
	  }
    }
	else 
		echo "<p style='color:red;font-size:1.3vw;position:absolute;top:50vh;left:2.5vw;background:white;border-radius:0.5vw;opacity:0.6;width:12vw;'><b >* Invalid Email Id</b> ►</p";
}
?>
<html>
<head>
<style>
body
{
	background: url(back.jpg) no-repeat fixed 100% 100%;background-size:cover;
	color:white;
	font-size:2vw;
	text-shadow:3.5px 3.5px 3.5px red;
}
#s1
{
	padding-left:2vw;
	width:15vw;
	display:inline-block;
	font-size:1.5vw;
	text-shadow:2px 2px 2px red;
}
#s2
{
    font-size:1.5vw;
	width:13vw;display:inline-block;
	text-shadow:2px 2px 2px red;
}
#s3
{
	font-size:1.5vw;
	width:15vw;display:inline-block;
	text-shadow:2px 2px 2px red;
}
#topic
{
	text-align:center;
	font-size:3vw;
}
#b1 ,#b2,#b3
{
	height:8vh;
	width:10vw;
	font-size:1.2vw;
	background:darkgreen;opacity:0.9;
	color:white;
    border-radius:0.5vw;
    border:none;cursor:pointer;
}
#b1
{
    position:absolute;
	top:15vh;
	left:55vw;	
}
#b2
{
	position:absolute;
	top:15vh;
	left:67vw;	
}
#b3
{
	position:absolute;
	top:15vh;
	left:79vw;	
}
#f1
{
  position:absolute;
  right:13vw;
  top:27vh;
  background:linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 15%,rgba(0,0,0,0.45) 15%,rgba(0,0,0,0.45) 85%,rgba(0,0,0,0.7) 85%,rgba(0,0,0,0.7) 100%);
  width:30vw;
  height:38vh;
  border-radius:0.7vw;
  display:none;
}
#i1,#i2,#i3
{
	position:absolute;
	background:black;
	opacity:0.7;
	width:28vw;
	height:6vh;
	left:1vw;
	border-radius:0.6vw;
	border:none;color:white;
	font-size:1.25vw;
	padding-left:1vw;
}
#i1
{
	top:7vh;
}
#i2
{
	top:14vh;
}
#i3
{
	top:21vh;
}
#sub1
{
	position:absolute;
	width:8vw;
	height:6vh;
	top:28vh;
	left:10vw;
	background:green;
	border-radius:0.6vw;color:white;
	border:none;
	cursor:pointer;
}
#f2
{
  position:absolute;
  right:13vw;
  top:27vh;
  background:linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 20%,rgba(0,0,0,0.45) 20%,rgba(0,0,0,0.45) 85%,rgba(0,0,0,0.7) 85%,rgba(0,0,0,0.7) 100%);
  width:30vw;
  height:35vh;
  border-radius:0.7vw;
  display:none;  
}
#i4,#i5
{
	position:absolute;
	background:black;
	opacity:0.7;
	width:28vw;
	height:6vh;
	left:1vw;
	border-radius:0.6vw;
	border:none;color:white;
	font-size:1.25vw;
	padding-left:1vw
}
#i4
{
	top:8vh;
}
#i5
{
	top:15vh;
}

#sub2
{
	position:absolute;
	width:12vw;
	height:6vh;
	top:23vh;
	left:9vw;
	background:green;
	border-radius:0.6vw;color:white;
	border:none;
	cursor:pointer;
}
#f3
{
  position:absolute;
  right:13vw;
  top:27vh;
  background:linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 15%,rgba(0,0,0,0.45) 15%,rgba(0,0,0,0.45) 87%,rgba(0,0,0,0.7) 87%,rgba(0,0,0,0.7) 100%);
  width:30vw;
  height:45vh;
  border-radius:0.7vw;display:none;
}
#i6,#i7,#i8,#i9
{
	position:absolute;
	background:black;
	opacity:0.7;
	width:28vw;
	height:4.5vh;
	left:1vw;
	border-radius:0.6vw;
	border:none;color:white;
	font-size:1.25vw;
	padding-left:1vw
}
#i6
{
	top:9vh;
}
#i7
{
	top:15vh;
}
#i8
{
	top:21vh;
}
#i9
{
	top:27vh;
}
#sub3
{
	position:absolute;
	width:12vw;
	height:6vh;
	top:32vh;
	left:9vw;
	background:green;
	border-radius:0.6vw;color:white;
	border:none;
	cursor:pointer;
}
</style>
<body>
<button id='b1' >Add Student</button>
<button id='b2' >Delete Student</button>
<button id='b3' >Update Student</button>
<form  id='f1' action='add1.php' method="post">
<input type='text' id="i1" name='addname' placeholder='Enter Full Name Of Student'><br>
<input type='text' id="i2" name='addroll' placeholder='Enter Roll No Of Student ' ><br>
<input type='text'id="i3" name='addage' placeholder='Enter Age Of Student' ><br> 
<input type='submit' id="sub1" value='Done' > <br>   
</form>
<form id='f2'action='delete1.php' method="post">
<input type='text' id='i4' name='delname' placeholder='Enter Full Name Of Student '><br>
<input type='text' id='i5' name='delroll' placeholder='Enter Roll No Of Student ' ><br> 
<input type='submit' id='sub2' value='Done' >
</form>
<form id='f3' action='update1.php' method="post">
<input type='text' id='i6' name='upoldroll' placeholder='Enter Old Roll no Of Student '><br>
<input type='text' id='i7' name='upname' placeholder='New Name Of Student ' ><br> 
<input type='text' id='i8' name='uproll' placeholder='New Roll No Of Student ' ><br>
<input type='text' id='i9' name='upage' placeholder='New Age Of Student ' ><br>
<input type='submit' id='sub3' value='Done' >
</form>
<script>
function fun1()
{
	document.getElementById("f1").style.display="block";
	document.getElementById("f2").style.display="none";
	document.getElementById("f3").style.display="none";
}
function fun2()
{
	document.getElementById("f1").style.display="none";
	document.getElementById("f2").style.display="block";
	document.getElementById("f3").style.display="none";
}
function fun3()
{
	document.getElementById("f1").style.display="none";
	document.getElementById("f2").style.display="none";
	document.getElementById("f3").style.display="block";
}
	document.getElementById("b1").onclick=fun1;
	document.getElementById("b2").onclick=fun2;
	document.getElementById("b3").onclick=fun3;
</script>
</body>
</head>
</html>