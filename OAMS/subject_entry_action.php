<?php
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);

// $subjid=$_POST['subjid'];
// $subjname=$_POST['subjname'];
// $subjcd=$_POST['subjcd'];
// $tname=$_POST['tname'];
// $branch=$_POST['branch'];
// $semester=$_POST['semester'];

  

if(isset($_POST['save']))
{

  
  $dept=$_POST['dept'];
  $teacher_name=$_POST['tea_name'];
  $semester=$_POST['semester'];
  $sub_code=$_POST['sub_code'];
  $sub_name=$_POST['sub_name'];
  $sub_credit=$_POST['sub_credit'];
  //   $sql1 = "SELECT sum(sub_credit) as total FROM sub_tbl WHERE teacher_name= '$tname'";
  //   $result1 = mysqli_query($conn,$sql1) or die(mysqli_error());
  //   $row=mysqli_fetch_row($result1 );
  //   $total=$row[0]+$subjcd;
  //   $subjcd=$_POST['subjcd'];

  //   if ($subjcd>3)
  //   {
  //     $_SESSION['error']['credit'] = "Credit cannot be more than three.";

  //     if(isset($_SESSION['error']))
  //     {
  //       header("location:http://localhost:8082/FINALPROJECT2/subject_entry.php");
  //       exit;
  //     }
  //     // echo ("<SCRIPT LANGUAGE='JavaScript'>
  //     //   window.alert('Subject Credit can not be grater than 3')
  //     //   window.location.href='http://localhost:8082/FINALPROJECT2/subject_entry.php'
  //     //    </SCRIPT>");
     
  //   }

  //   if ($total>15)
  //   {
  //     $_SESSION['error_2']['credit'] = "Credit Limit is over for this Teacher";

  //     if(isset($_SESSION['error_2']))
  //     {
  //       header("location:http://localhost:8082/FINALPROJECT2/subject_entry.php");
  //       exit;
  //     }
     
  //   }

    $sql1 = "SELECT sum(sub_credit) as total FROM sub_tbl WHERE teacher_name= '$teacher_name'";
    $result1 = mysqli_query($conn,$sql1) or die(mysqli_error());
    $row=mysqli_fetch_row($result1 );
    $total=$row[0]+$sub_credit;
    if ($total>15)
    {
      $_SESSION['error_2']['credit'] = "Credit Limit is over for this Teacher";

      if(isset($_SESSION['error_2']))
      {
        header("location:http://localhost:8082/FINALPROJECT2/index_2.php");
        exit;
      }
     
    }


  $query=mysqli_query($conn,"select teacher_id from teacher where teacher_name='$teacher_name' ");
  $row=mysqli_fetch_row($query);
  $tid=$row[0];

  $q1=mysqli_query($conn,"insert into sub_tbl values('$sub_code','$sub_name','$sub_credit','$teacher_name','$tid','$dept','$semester')");
  if($q1)
  {
      header("location:http://localhost:8082/FINALPROJECT2/subject_details.php");


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