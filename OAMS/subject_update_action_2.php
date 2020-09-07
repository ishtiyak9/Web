<?php
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);
//mysqli_select_db($conn,$dbname);
$subcode=$_GET["subcode"];
$update = mysqli_query($conn,"SELECT * FROM sub_tbl where subject_code='$subcode'");

if(isset($_POST['update']))
 {

    $subjid=$_POST['subjid'];
    $subjname=$_POST['subjname'];
    $subjcd=$_POST['subjcd'];
    $tname=$_POST['tname'];
    $dept=$_POST['dept'];
    $semester=$_POST['semester'];

    $sql1 = "SELECT sum(sub_credit) as total FROM sub_tbl WHERE teacher_name= '$tname'";
    $result1 = mysqli_query($conn,$sql1) or die(mysqli_error());
    $row=mysqli_fetch_row($result1 );

    $sql2 = "SELECT sub_credit FROM sub_tbl WHERE teacher_name= '$tname' and subject_code='$subjid' ";
    $result2 = mysqli_query($conn,$sql2) or die(mysqli_error());
    $row2=mysqli_fetch_row($result2 );
    //$total=$row[0]+$subjcd;
    $total=($row[0]-$row2[0])+$subjcd;;
    $subjcd=$_POST['subjcd'];

    if ($subjcd>3)
    {
      $_SESSION['error']['credit'] = "Credit cannot be more than three.";

      if(isset($_SESSION['error']))
      {
        header("location:http://localhost:8082/FINALPROJECT2/subject_update_action.php?subcode={$subcode}");
        exit;
      }
     
    }

    if ($total>15)
    {
      $_SESSION['error_2']['credit'] = "Credit Limit is over for this Teacher";

      if(isset($_SESSION['error_2']))
      {
        header("location:http://localhost:8082/FINALPROJECT2/subject_update_action.php?subcode={$subcode}");
        exit;
      }
     
    }

    $query=mysqli_query($conn,"select teacher_id from teacher where teacher_name='$tname' ");
    $row=mysqli_fetch_row($query);
    $tid=$row[0];
    echo $tid;

   $q1=mysqli_query($conn,"UPDATE sub_tbl SET subject_code='$subjid',subject_name='$subjname',sub_credit='$subjcd',teacher_name='$tname',teacher_id='$tid',dept_name='$dept',semester='$semester' where subject_code='$subcode'"); //$subjid(cannot change subject_code)
    
    if($q1)
    {
     header("location:http://localhost:8082/FINALPROJECT2/subject_details.php");


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
    header("location:http://localhost:8082/FINALPROJECT2/subject_details.php");
 }
?>