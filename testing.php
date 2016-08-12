<link rel="icon" href="favassign4.png">
<link rel="stylesheet" type="text/css" href="register.css">
<style>
body{
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
#s8
{
    font-size:1.8vw;margin-left:5vw;
	width:6.5vw;display:inline-block;
	text-shadow:2px 2px 2px red;
}
#s9
{
	font-size:1.8vw;
	width:10vw;display:inline-block;
	text-shadow:2px 2px 2px red;
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
#lb
{
	position:absolute;
	top:80vh;
	left:35vw;
	height:8vh;
	width:20vw;
	font-size:1.2vw;
	background:darkgreen;
	color:white;
    border-radius:0.5vw;
    border:none;cursor:pointer;
}
#ph
{
	text-align:center;
	font-size:3vw;
}

#p0
{
	color:white;
	position:absolute;
	left:35vw;
	top:5vh;
	font-size:2.5vw;
}
#p1
{
	color:white;
	position:absolute;
	left:30vw;
	top:30vh;
}
#p2
{
	color:white;
	position:absolute;
	left:30vw;
	top:40vh;
}
#p3
{
	color:white;
	position:absolute;
	left:30vw;
	top:50vh;
}
#f1 
{
	display:none;
	position:absolute;
	top:25vh;
	left:65vw;	
}
#f2
{
	display:none;
	position:absolute;
	top:25vh;
	left:65vw;
}
#f3
{
	display:none;
	position:absolute;
	top:25vh;
	left:65vw;
}
</style>
<button id='b1' >Add Student</button>
<button id='b2' >Delete Student</button>
<button id='b3' >Update Student</button>
<form id='f1' action='add.php' method="post">
<input type='text' id="fs1" name='addname' placeholder='Add Name '><br>
<input type='text' id="fs2" name='addroll' placeholder='Enter Roll No ' ><br>
<input type='text'id="fs3" name='addage' placeholder='Add Age ' ><br> 
<input type='submit' id="subf1" value='Done' > <br>   
</form>
<form id='f2'action='delete.php' method="post">
<input type='text' id='fs4' name='delname' placeholder='Add Name '><br>
<input type='text' id='fs5' name='delroll' placeholder='Enter Roll No ' ><br> 
<input type='submit' id='subf2' value='Done' >
</form>
<form id='f3' action='update.php' method="post">
<input type='text' id='fs6' name='upoldroll' placeholder='Enter Old Roll no '><br>
<input type='text' id='fs7' name='upname' placeholder='New Name ' ><br> 
<input type='text' id='fs8' name='uproll' placeholder='New Roll ' ><br>
<input type='text' id='fs9' name='upage' placeholder='New Age ' ><br>
<input type='submit' id='subf3' value='Done' >
</form>
<div id='divf1'>
<span id='sf1'>Add Student</span>
</div>
<script type="text/javascript" src="ajax.js"></script>
<script>
function fun1()
{
	document.getElementById("f1").style.display="block";
	document.getElementById("divf1").style.display="block";
	document.getElementById("f2").style.display="none";
	document.getElementById("f3").style.display="none";
}
function fun2()
{
	document.getElementById("f1").style.display="none";
	document.getElementById("divf1").style.display="block";
	document.getElementById("f2").style.display="block";
	document.getElementById("f3").style.display="none";
}
function fun3()
{
	document.getElementById("f1").style.display="none";
	document.getElementById("f2").style.display="none";
	document.getElementById("divf1").style.display="block";
	document.getElementById("f3").style.display="block";
}
	document.getElementById("b1").onclick=fun1;
	document.getElementById("b2").onclick=fun2;
	document.getElementById("b3").onclick=fun3;
</script>
<?php
require 'connect.php';
require 'core.php';
$sp="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
if(isset($_SESSION['username']) && !empty($_SESSION['username']) && $_SESSION['username']!="admin")
{
	echo "<p id='ph'>You Have Logged In Successfully ".$_SESSION['username']." !!!<p>";
	$username = $_SESSION['username'];
    $sqlstu = "SELECT student_name , roll ,age FROM student where prof_name='$username'";
   $result = $conn->query($sqlstu);
   echo "$sp Name $sp &nbsp;&nbsp;&nbsp; $sp Roll $sp $sp &nbsp;&nbsp;&nbsp;Age <br><br>" ;
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<span id='s1'>$row[student_name] </span> <span id='s2'>$row[roll] </span> <span id='s3'>$row[age] </span><br>";
    }
	}
	echo "<a href=logout.php><button id= 'lb'>Log Out</button></a>";
}
else if (isset($_SESSION['username']) && !empty($_SESSION['username']) && $_SESSION['username']=="admin" && $_SESSION['pass']=="pass")
  {
       echo '<style type="text/css">
        #b1,#b2,#b3,#f1,#f2,#f3{
            display: none;
        }
        </style>';
    include 'admin1.php';
    unset($_SESSION["firstname"]);
  }

else
{
   echo '<style type="text/css">
        #b1,#b2,#b3,#f1,#f2,#f3{
            display: none;
        }
        </style>';
include 'signin.php';
}
?>