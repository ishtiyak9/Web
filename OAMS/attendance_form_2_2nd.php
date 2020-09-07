<?php
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);

if(isset($_POST['submit']))
{

	$semester=$_POST["semester"];
    $subject=$_POST['subjid'];
    $date=$_POST['date'];
    $sql1 = "SELECT * FROM attd_tbl WHERE semester='$semester' and date = '$date' and subject='$subject' ";
    $result1 = mysqli_query($conn,$sql1) or die(mysqli_error());

    if (mysqli_num_rows($result1) > 0)
    {
      $_SESSION['error']['semester'] = "This marking for this subject and session is already done.";

      if(isset($_SESSION['error']))
      {
        header("Location: http://localhost:8082/FINALPROJECT/attendance_form_2.php?semester={$semester}");
        exit;
      }
     
    }


	$semester=$_POST["semester"];
	$sql="select * from bhup  where semester='$semester' order by rn";
	$result=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_array($result))
    {

        

        
		$stid=$row['rn']; 
		$semester=$_POST['semester'];
		$subject=$_POST['subjid'];
		$date=$_POST['date'];
		//$date=date('y-m-d',strtotime($dateFormat));
		$attendance=$_POST[$stid];

    $q1=mysqli_query($conn,"insert into attd_tbl values('$stid','$semester','$subject','$date','$attendance',' ')");
	}
  
  if($q1)
  {
   header("location:http://localhost:8082/FINALPROJECT2/attendance_details.php");

  }
  else
  {

  echo"Cannot Add Your Record" ;
  }
}
?>

<?php

		// $dbhost="localhost";
		// $dbuser="root";
		// $dbpass="";
		// $dbname="sis";
		// $conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");
		
		$semester=$_POST["semester"];
		// $subject=$_GET["subject"];

		// mysqli_select_db($conn,$dbname);
		$sql="select * from bhup  where semester='$semester' order by rn";
		$sql1="select distinct(semester) from bhup where semester='$semester'";
		$sql2="select * from sub_tbl where semester='$semester' order by subject_name";
		

		$result=mysqli_query($conn,$sql);
		$result1=mysqli_query($conn,$sql1);
		$result2=mysqli_query($conn,$sql2);
		// echo "<br><br><br>";
		// echo "$semester";


?>

<?php
$pagetitle="student data";
include "include/header.php"; ?>

<?php
// session_start();
if(isset($_SESSION['error']))
{
// echo '<p>'.$_SESSION['error']['username'].'</p>';
// echo '<p>'.$_SESSION['error']['email'].'</p>';
// echo '<p>'.$_SESSION['error']['password'].'</p>';
// echo '<p>'.$_SESSION['error']['exam_session'].'</p>';

echo "<script type='text/javascript'>
      
        alert('The attendance for this subject and date is already done.');
    </script>";

unset($_SESSION['error']);
}
?>



			<div class="main">

				<div class="content">


					<div class="text-center">
                        <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Attendance Form</span>
                        <hr class="team_hr team_hr_right hr_gray" />
                    </div>  <!-- text-center -->
 
				    <br><br><br>

                <center>  
                    <form method="POST" action="" name="reg" onSubmit="return validate()">

					<div class="row">

				    	

				    	<div class="form-group" >

				    	<?php
						while($row=mysqli_fetch_array($result1))
						{
						?>
				            <input type="text" class="form-control2" name="semester" value="<?php echo $row['semester']; ?>" required>

				        <?php } ?>
			          	</div>

				      	<!-- <div class="form-group" >
				            <input type="text" class="form-control2" name="date" placeholder="(Date) yyyy-mm-dd" value="<?php echo @$_POST['date'];?>" required>
			          	</div> -->

			          	<div class="form-group" >
				            <input type="text" class="form-control2" name="date" placeholder="(Date) yyyy-mm-dd" value="<?php echo date('y-m-d');?>" required>
			          	</div>

				      	<div class="form-group">
				    	<select class='form-control2' name='subjid' required>	

				    		<option >select subject</option>		
				       	<?php
						while($row=mysqli_fetch_array($result2))
						{
						?>
				       		<option value="<?php echo $row['subject_name']; ?>"><?php echo $row['subject_name']; ?></option>

				       	<?php } ?>

				     	</select>
				      	</div>
				      	<br>

				       	<?php
						while($row=mysqli_fetch_array($result))
						{
						?>
				       		

				       	<div class="form-group">
				       		<input type="text" class="form-control2" name="<?php echo $row['rn']; ?>" value="<?php echo $row['rn']; ?>" required>

				      	</div>

				    
					    <div class="form-group colour">
					    <input type="radio" value="P" name="<?php echo $row['rn']; ?>"  />Present
					    </div>
				    
					    <div class="form-group colour">
					    <input type="radio" value="A"  name="<?php echo $row['rn']; ?>" />Absent
					    </div>

					    <?php echo "<br>"; ?>
					    <?php } ?>


						<div class="form-group">
					    <input class="save_btn" type="submit" name="submit" value="Save">
					    </div>

					</div> <!--  row -->
				   
				 </form>

				</center> 

				</div> <!-- content -->

<?php include "include/footer.php"; ?>