<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);

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
                    <form method="POST" action="attendance_form_action.php">
<?php
if(isset($_POST['save']))
{
	$sem = $_POST['semester'];
}

?>
					<div class="row">

				    	<div class="form-group">
				    	<select class='form-control2' name='stid' required>	

				       		<?PHP

						$sql = "SELECT DISTINCT rn FROM bhup where semester='$sem'";
						$result = mysqli_query ($conn,$sql);
						while ($row = mysqli_fetch_array ($result))
						{
						?>	
				       		<option value="<?php echo $row['rn'];?> "><?php echo $row['rn'];?> </option>
				       		<?php } ?>

				     	</select>
				      	</div>

				    	<div class="form-group">
				    	<select class='form-control2' name='semester' required>	
				    		<option value="<?php echo $sem; ?>" ><?php echo $sem; ?></option>		
				     	</select>
				      	</div>

				      	<div class="form-group" >
				           <!--  <label for="dob" class="l"> Date Of Birth </label><br> -->
				            <input type="text" class="form-control2" name="date" placeholder="(Date) yyyy-mm-dd" required>
			          	</div>

				      	<div class="form-group">
				    	<select class='form-control2' name='subjid' required>	

				    		<?PHP

						$sql = "SELECT DISTINCT subject_name FROM sub_tbl where semester='$sem' ";
						$result = mysqli_query ($conn,$sql);
						while ($row = mysqli_fetch_array ($result))
						{
						?>	
				       		<option value="<?php echo $row['subject_name'];?> "><?php echo $row['subject_name'];?> </option>
				       		<?php } ?>

				     	</select>
				      	</div>
				    
					    <div class="form-group colour" name="attendance">
					    <input type="radio" name="attendance" value="Present" />Present
					    </div>
				    
					    <div class="form-group colour" name="attendance">
					    <input type="radio" name="attendance" value="Absent" />Absent
					    </div>

						<div class="form-group">
					    <input class="save_btn" type="submit" name="save" value="Save">
					    </div>

					</div> <!--  row -->
				   
				 </form>

				</center> 

				</div> <!-- content -->

<?php include "include/footer.php"; ?>	