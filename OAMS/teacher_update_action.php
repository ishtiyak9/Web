<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);
//$tid=$_GET['id'];


if(isset($_POST['submit']))
{

	$tid=$_GET['id'];

  $name=$_POST["teacher_name"];
	$userid=$_POST['user_id'];
	$dept=$_POST['dept_name'];
	$dob=$_POST['dob'];
	$address=$_POST['address'];
	$phone=$_POST['phone_no'];

  $q1=mysqli_query($conn,"UPDATE teacher SET teacher_name='$name',teacher_id='$userid',dept_name='$dept',dob='$dob',address='$address',phone_no='$phone' where teacher_name='$tid' "); 
  
  if($q1)
  {
      header("location:http://localhost:8082/FINALPROJECT2/teacher_details.php");


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