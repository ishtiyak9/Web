<?php
//mysqli procedural
$conn=mysqli_connect("localhost","root","","chatme");
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
?>