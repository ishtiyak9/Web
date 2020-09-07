<?php

		$dbhost="localhost";
		$dbuser="root";
		$dbpass="";
		$dbname="sis";
		$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

		mysqli_select_db($conn,$dbname);
		// $sql="select * from bhup order by rn";
		$sql1="select distinct(semester) from bhup";
		// $sql2="select * from attendance ";
		

		// $result=mysqli_query($conn,$sql);
		$result1=mysqli_query($conn,$sql1);
		// $result2=mysqli_query($conn,$sql2);


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
                    <form method="POST" action="attendance_form_2.php" name="reg" onSubmit="return validate()">

					<div class="row">

				    	<div class="form-group">
				    	<select class='form-control2' name='semester' required>	<option >select semester</option>		
				       		<?php
						while($row=mysqli_fetch_array($result1))
						{
						?>
				       		<option value="<?php echo $row['semester']; ?>"><?php echo $row['semester']; ?></option>

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