<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);


if(isset($_POST['submit']))
{

	$fn=$_POST["fn"];
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
	$id='10';
	$address=$_POST['address'];
	$pass_code='0';
	$cap1=strtoupper($fn);
	$cap2=strtoupper($ln);
	$cap3=strtoupper($address);

  $q1=mysqli_query($conn,"insert into bhup values('$cap1','$cap2','$session2 $session','$rn','$branch','$year','$semester','$dd $mm $yy','$cap3','$id','$pass_code')");
  if($q1)
  {
      header("location:http://localhost:8082/FINALPROJECT2/student_details.php");


      echo "<script type='text/javascript'>
    
               alert('Successfully added');
            </script>";
  }
  else
  {

  echo"Cannot Add Your Record" ;
  }
}
?>