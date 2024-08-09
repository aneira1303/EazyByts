<?php

$date=date('H:i:s');

//mysqli procedural
$conn=mysqli_connect("localhost","root","","chatdb");
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
?>
