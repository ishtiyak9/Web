<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);
// $subcode=$_GET["subcode"];
// echo $subcode;

if (isset($_GET["subcode"])) 
{
	echo $_GET['subcode'];

 $del=mysqli_query($conn,"DELETE FROM sub_tbl where subject_code='$_GET[subcode]'");


	if($del)
	{
	 header("location:http://localhost:8082/FINALPROJECT2/subject_details.php");
	}
	else
	{

	echo"Cannot Delete Your Record" ;
	}
}

?>
