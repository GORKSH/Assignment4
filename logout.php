<style>
body{
	background: url(back.jpg) no-repeat fixed 100% 100%;background-size:cover;
	color:white;
	font-size:3vw;
}
button
{
	position:absolute;
	top:8vh;
	right:25vw;
	height:8vh;
	width:20vw;
	font-size:1.2vw;
	background:darkgreen;
	color:white;
    border-radius:0.5vw;
    border:none;
}

</style>
<?php
require 'core.php';
session_destroy();
header('Location: testing.php');
?>