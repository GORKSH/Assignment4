<?php
require 'connect.php';
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name=$_POST['delname'];
$roll=$_POST['delroll'];
$sql = "DELETE FROM student WHERE roll='$roll' AND student_name='$name' ";
if (mysqli_query($conn, $sql)) {
    header("Location: testing.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>