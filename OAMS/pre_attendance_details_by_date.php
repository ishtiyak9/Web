<?php
		session_start();
		$dbhost="localhost";
		$dbuser="root";
		$dbpass="";
		$dbname="sis";
		$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

		mysqli_select_db($conn,$dbname);
		$sql="select distinct(semester) from attd_tbl";
		$semester='selest semester';
		$subject='selest subject';
		


		$result=mysqli_query($conn,$sql);
		

		if(isset($_POST['semester']))
		{
			$semester=$_POST['semester'];
			$sql1="select distinct(subject) from attd_tbl where semester='$semester' order by subject";
			
			$result1=mysqli_query($conn,$sql1);
			
			$_SESSION['semester']=$semester;
		}


		if(isset($_POST['subject']))
		{
			$subject=$_POST['subject'];
			$sql2="select distinct(date) from attd_tbl where subject='$subject'";
			$result2=mysqli_query($conn,$sql2);

		}


		if(isset($_POST['save']))
		{
			$semester=$_POST['semester'];
			$subject=$_POST['subject'];
			$date=$_POST['date'];


			header("location:http://localhost:8082/FINALPROJECT2/attendance_details_by_date.php?semester={$semester}&subject={$subject}&date={$date}");
		}


?>

<?php
$pagetitle="student data";
include "include/header.php"; ?>


			<div class="main">

				<div class="content">


					<div class="text-center">
                        <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Attendance Form</span>
                        <hr class="team_hr team_hr_right hr_gray" />
                    </div>  <!-- text-center -->
 
				    <br><br><br>

                <center>  
                    <form method="POST" action=" " name="reg" onSubmit="return validate()">

					<div class="row">

				    	<div class="form-group">
				    	<select class='form-control2' name='semester' onchange='this.form.submit()' required>	
				    	<option ><?php echo $semester;?></option>		
				       		<?php
						while($row=mysqli_fetch_array($result))
						{
						?>
				       		<option value="<?php echo $row['semester']; ?>"><?php echo $row['semester']; ?></option>

				       	<?php } ?>

				     	</select>
				      	</div>

				      	<div class="form-group">
				    	<select class='form-control2' name='subject' onchange='this.form.submit()' required>	<option ><?php echo $subject;?></option>		
				       		<?php
						while($row=mysqli_fetch_array($result1))
						{
						?>
				       		<option value="<?php echo $row['subject']; ?>"><?php echo $row['subject']; ?></option>

				       	<?php } ?>

				     	</select>
				      	</div>

				      	<div class="form-group">
				    	<select class='form-control2' name='date' required>	<option >select date</option>		
				       		<?php
						while($row=mysqli_fetch_array($result2))
						{
						?>
				       		<option value="<?php echo $row['date']; ?>"><?php echo $row['date']; ?></option>

				       	<?php } ?>

				     	</select>
				      	</div>

						<div class="form-group">
					    <input class="save_btn" type="submit" name="save" value="Save">
					    </div>

					</div> <!--  row -->
				   
				 </form>

				</center> 

				</div> <!-- content -->


<?php include "include/footer.php"; ?>	