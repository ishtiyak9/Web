<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);

$stid=$_POST['stid'];
$semester=$_POST['semester'];
$subject=$_POST['subjid'];
$date=$_POST['date'];
$attendance=$_POST['attendance'];


if(isset($_POST['save']))
{

  $q1=mysqli_query($conn,"insert into attd_tbl values('$stid','$semester','$subject','$date','$attendance')");
  
  if($q1)
  {
   header("location:http://localhost:8082/FINALPROJECT2/attendance_details.php");

   // header("location:http://localhost:8080/FINALPROJECT/attendance_form.php?semester={$semester}");
  }
  else
  {

  echo"Cannot Add Your Record" ;
  }
}
?>