<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);

$username=$_POST['username'];
$password=$_POST['password'];


if(isset($_POST['update']))
 {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $q1=mysqli_query($conn,"UPDATE teacher_signup_tbl SET password='$password' where username ='$username' ");
    
    if($q1)
    {
     header("location:http://localhost:8082/FINALPROJECT/teacher/login_teacher.php");


     echo "<script type='text/javascript'>
	  
               alert('Successfully updated');
            </script>";


    }
    else
    {

    echo"Cannot Update Your Record" ;
    }
    
 }

?>