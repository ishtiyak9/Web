<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);

// $stid=$_POST['stid'];
// $semester=$_POST['semester'];
// $subject=$_POST['subjid'];
// $date=$_POST['date'];
// $attendance=$_POST['attendance'];


if(isset($_POST['save']))
{

	$semester=$_POST['semester'];

	header("location:http://localhost:8082/FINALPROJECT2/teacher/attendance_form_2.php?semester={$semester}");
}
 else
  {

  echo"Cannot Add Your Record" ;
  }
?>