<?php
$host = 'localhost' ;
$user = 'root';
$pass ='';
$mydatabase ='a_database';
@mysqli_connect($host, $user , $pass , $mydatabase ) or die ('connection failed');
$conn=mysqli_connect($host, $user , $pass , $mydatabase );
?>