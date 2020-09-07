<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);


if(isset($_POST['submit']))
{

  $teacher_name= $_POST["teacher_name"];
  $user_id = $_POST["user_id"];
  $dept_name = $_POST["dept_name"];
  $dob = $_POST["dob"];
  $address = $_POST["address"];
  $phone_no = $_POST["phone_no"];

  $q1=mysqli_query($conn,"insert into teacher values(' ','$teacher_name','$user_id','$dept_name','$dob','$address','$phone_no')");
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

  	
	// $date = new DateTime($dob);
	// $newDate=$date->format('Y-m-d'); // 31-07-2012
	// echo $newDate;

	// $newDateString = date_format(date_create_from_format('Y-m-d', $dob), 'Y-m-d');
	// echo $newDateString;

	// $newDate = date("Y-m-d", strtotime($dob));
	// echo $newDate;
}
?>