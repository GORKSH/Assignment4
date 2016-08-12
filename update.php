<?php
require 'connect.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$oldroll=$_POST['upoldroll'];
$name=$_POST['upname'];
$roll=$_POST['uproll'];
$age=$_POST['upage'];
$sql = "UPDATE student SET student_name='$name' , roll='$roll' ,age='$age' WHERE roll='$oldroll' ";
if ($conn->query($sql) === TRUE) {
   header("Location: testing.php");
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>