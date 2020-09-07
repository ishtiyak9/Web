<?php
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);




if(isset($_POST['save']))
{

  $dept=$_POST['dept'];
  $teacher_name=$_POST['tea_name'];
  $semester=$_POST['semester'];
  $sub_code=$_POST['sub_code'];
  $sub_name=$_POST['sub_name'];
  $sub_credit=$_POST['sub_credit'];

  echo $dept.'<br>';
  echo $teacher_name.'<br>';
  echo $semester.'<br>';
  echo $sub_code.'<br>';
  echo $sub_name.'<br>';
  echo $sub_credit.'<br>';

  // $q1=mysqli_query($conn,"insert into sub_tbl values('$subjid','$subjname','$subjcd','$tname','$tid','$branch','$semester')");
  // if($q1)
  // {
  //     header("location:http://localhost:8082/FINALPROJECT2/subject_details.php");


  //     echo "<script type='text/javascript'>
    
  //              alert('Successfully added');
  //           </script>";
  // }
  // else
  // {

  // echo"Cannot Add Your Record" ;
  // }
}
?>