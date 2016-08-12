<link rel="stylesheet" type="text/css" href="register.css">
<?php
    echo "<a href=logout.php><button id= 'lb'>Log Out</button></a>";
    echo "<p id='ph'>You Have Logged In Successfully As Admin !!!<p>";
    echo "$sp List Of Professors <br><br>";
    $sqlstu = "SELECT firstname , lastname  FROM registertable where username!='admin' ";
     $result = $conn->query($sqlstu);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<span id='s8'>$row[firstname] </span> <span id='s9'>$row[lastname] </span> <br>";
    }
  }
?>
<html>
<head>
<style type="text/css">
#form1{
  position:absolute;
  right:19vw;
  top:25vh;
  background:linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 20%,rgba(0,0,0,0.45) 20%,rgba(0,0,0,0.45) 85%,rgba(0,0,0,0.7) 85%,rgba(0,0,0,0.7) 100%);
  width:25vw;
  height:30vh;
  border-radius:0.7vw;
}
#fnp , #lnp
{
  position:absolute;
  left:1vw;
  font-size:1.2vw;
  width:23vw;
  height:5.5vh;
  background:rgba(0,0,0,0.45);;
  border:none;
  color:rgba(255,255,255,0.7);
  border-radius:0.5vw;z-index:200;
  padding-left:1vw;
}
#fnp{top:7vh;}
#lnp{top:13vh;}
#sp
{
  position:absolute;
  top:20vh;
  left:7vw;
  height:4.5vh;
  width:10vw;
  background:green;
  border-radius:0.6vw;
  font-size:1.3vw;
  color:white;
  border:none;cursor:pointer;
}
</style>
<meta charset='utf-8'>
<link rel="icon" href="favassign4.png">
<link rel="stylesheet" type="text/css" href="register.css">
<p style="position:absolute;right:20vw;top:13vh;" >View Students Of Professors  </p>
<form id="form1" action="admin2.php" method="post">
<input id="fnp" type="text" name="firstname" placeholder="Enter firstname of professor"><br>
<input id="lnp" type="text" name="lastname" placeholder="Enter lastname of professor"><br>
<input id="sp" type="submit" value="Done">
</form>
</body>
</html>