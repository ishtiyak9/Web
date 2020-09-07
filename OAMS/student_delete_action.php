<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);
$rn=$_GET["rn"];

// $rn=$_POST['rn'];

if (isset($_POST["submit"])) 
{


 $del=mysqli_query($conn,"DELETE FROM bhup where rn={$rn}");


	if($del)
	{
	 header("location:http://localhost:8082/FINALPROJECT2/student_details.php");
	}
	else
	{

	echo"Cannot Delete Your Record" ;
	}
}

if (isset($_POST["back"])) 
{
	header("location:http://localhost:8082/FINALPROJECT2/student_details.php");
}
?>

<?php
$pagetitle="student data";
include "include/header_loginpage.php"; ?>

<div class="main">

				<div class="content">
				<center>

				<p style="color:black; font-weight:bold">Do you want to delete ID <?php echo $rn ?></p>
				<br><br>
				<form role="form" method="post" action=" ">

				<input class="mini_red_button"  placeholder="sd" name="submit" type="submit" value="Confirm" style="margin-right:15px;"> 

				<input class="mini_green_button"  placeholder="sd" name="back" type="submit" value="Cancel"> 

				<!-- <a class="mini_green_button" href="student_details.php">Back</a> -->
				</form>
				</center>

				</div> <!-- content -->

<?php include "include/footer.php"; ?>					