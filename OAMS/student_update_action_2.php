<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);

$fn=$_POST['fn'];
$ln=$_POST['ln'];
$session=$_POST['session'];
$session2=$_POST['session2'];
$rn=$_POST['rn'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$semester=$_POST['semester'];
$dd=$_POST['dd'];
$mm=$_POST['mm'];
$yy=$_POST['yy'];
$address=$_POST['address'];
$cap1=strtoupper($fn);
$cap2=strtoupper($ln);
$cap3=strtoupper($address);

if(isset($_POST['update']))
 {

   $q1=mysqli_query($conn,"UPDATE bhup SET fname='$cap1',lname='$cap2',session='$session2 $session',rn='$rn',branch='$branch',year='$year',semester='$semester',dob='$dd $mm $yy',address='$cap3' where rn =$rn");
    if($q1)
    {
     header("location:http://localhost:8082/FINALPROJECT2/student_details.php");


     echo "<script type='text/javascript'>
	  
               alert('Successfully updated');
            </script>";


    }
    else
    {

    echo"Cannot Update Your Record" ;
    }
 }

 if(isset($_POST['back']))
 {
    header("location:http://localhost:8082/FINALPROJECT2/student_details.php");
 }
?>