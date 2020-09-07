<?php
session_start();

		$dbhost="localhost";
		$dbuser="root";
		$dbpass="";
		$dbname="table";
		$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");
		$sub_name=' ';
		$sub_credit=' ';

		mysqli_select_db($conn,$dbname);
		$total_credit=" ";
		$total=" ";

		
		if(isset($_POST['semester']))
		{
			$sql3="select sub_code from subject where semester='$_POST[semester]'";
			$result3=mysqli_query($conn,$sql3);
		}
		
		if(isset($_POST['sub_code']))
		{
			$sql4="select * from subject where sub_code='$_POST[sub_code]'";
			$result4=mysqli_query($conn,$sql4);

			while($row=mysqli_fetch_array($result4))
			{
		       $sub_name=$row['sub_name'];
		       $sub_credit=$row['sub_credit'];
		    }	
		}
// session_destroy();
?>

<?php
$pagetitle="student data";
include "include/header.php"; ?>

		<div class="main">

			<div class="content">

				<div class="text-center">
					<hr class="team_hr team_hr_left hr_gray" /><span class="span_blog txt_darkgrey txt_orange">Subject Entry</span>
					<hr class="team_hr team_hr_right hr_gray" />
				</div>
				<!-- text-center -->
				<br>
				<br>

				
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF']  ?>" name="reg" ">

					<center>

						<table bgcolor="" width="80%">

					</center>
					<!-- center -->

					<tr>
						<td>Semester:</td>
						<td>
							<select name="semester" class="form-control" onchange='this.form.submit()'>
								<option value="">select semester</option>
								<option value="FIRST">FIRST</option>
								<option value="SECOND">SECOND</option>
								<option value="THIRD">THIRD </option>
							</select>
						</td>
					</tr>
					
					<tr>
				        <td>Subject code:</td>
				    	<td><select class='form-control' name='sub_code' onchange='this.form.submit()'>

				    	<option value="">select sub_code</option>	
				       	<?php

						while($row=mysqli_fetch_array($result3))
						{
						?>
				       	

							<option value="<?php echo $row['sub_code']; ?>"><?php echo $row['sub_code']; ?></option>

				       	<?php } ?>

				     	</select></td>
				    </tr>
					  
					  
					<tr>
				        <td>Subject name:</td>
				    	<td><select class='form-control' name='sub_name'>	

							<option value="<?php echo $sub_name; ?>"><?php echo $sub_name; ?></option>

				     	</select></td>
				    </tr>



					<tr>
				        <td>Subject credit:</td>
				    	<td><select class='form-control' name='sub_credit'>	
							
							<option value="<?php echo $sub_credit; ?>"><?php echo $sub_credit; ?></option>

				     	</select></td>
				      </tr>

					<tr>
						<td>&nbsp;</td>
						<td>
							<!-- <input class="mini_green_button" type="submit" name="save" value="Submit" disabled="" /> -->
							<?php 

							if($sub_credit!=' ' && $sub_credit>1){
								echo '<input class="mini_green_button" type="submit" name="save" value="Submit" />';
							}
							?>

						</td>
					</tr>

					
					</table>
					<br>
					<br>

				</form>
			</div>
			
			
			<!-- content -->



<?php include "include/footer.php"; ?>	