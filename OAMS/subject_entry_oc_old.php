<script type="text/javascript">

onunload = function()
{
	var dept_name = document.getElementById('dept_name');
	self.name = 'dept_nameidx' + dept_name.selectedIndex;

	// var teacher_name = document.getElementById('teacher_name');
	// self.name = 'teacher_nameidx' + teacher_name.selectedIndex;

}

onload = function()
{
	var idx, dept_name  = document.getElementById('dept_name');
	dept_name.selectedIndex = (idx = self.name.split('dept_nameidx')) ?	idx[1] : 0;

	// var idx, teacher_name  = document.getElementById('teacher_name');
	// teacher_name.selectedIndex = (idx = self.name.split('teacher_nameidx')) ?	idx[1] : 0;
}


</script>
<?php


		$dbhost="localhost";
		$dbuser="root";
		$dbpass="";
		$dbname="table";
		$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

		mysqli_select_db($conn,$dbname);
		$total_credit=" ";
		$total=" ";
		$sub_code=' ';
		$sub_name=' ';
		$sub_credit=' ';
		$_SESSION['dept']=' ';
		$_SESSION['teacher_name']='select teacher';
		$_SESSION['semester']='select semester';
		$_SESSION['sub_code']=' ';
		session_start();
		
		


		if(isset($_POST['dept_name']))
		{
			// $sql2="select distinct(tea_name) from teacher where dept='$_POST[dept_name]'";
			// $result2=mysqli_query($conn,$sql2);
			$_SESSION['dept']=$_POST['dept_name'];
			$dept=$_POST['dept_name'];
		}


		if(isset($_POST['teacher_name']))
		{
			$_SESSION['teacher_name']=$_POST['teacher_name'];

		    if ($_POST['teacher_name'])
		    {
		      	$_SESSION['teacher_name']=$_POST['teacher_name'];
		      	$sql8 = "SELECT sum(sub_credit) as total FROM sub_tbl WHERE teacher_name= '$_POST[teacher_name]'";
			    $result8 = mysqli_query($conn,$sql8) or die(mysqli_error());
			    $row=mysqli_fetch_row($result8 );
			    $total=15-$row[0];
			    $_SESSION['total']=$total;
			   

			      $_SESSION['error_2']['credit'] = "This teacher can take ".$total." more credit";

			      if(isset($_SESSION['error_2']))
			      {
			        header("location:http://localhost:8082/FINALPROJECT2/subject_entry_oc_old.php");
			        exit;
			      }

    		}

		}


		
		if(isset($_POST['semester']))
		{
			//echo $_POST['dept_name'];
			$sql3="select sub_code from subject where semester='$_POST[semester]'";
			$result3=mysqli_query($conn,$sql3);
			$_SESSION['semester']=$_POST['semester'];
		}
		
		if(isset($_POST['sub_code']))
		{
			// echo $_POST['dept_name'];
			$_SESSION['sub_code']=$_POST['sub_code'];
			$sql4="select * from subject where sub_code='$_POST[sub_code]'";
			$result4=mysqli_query($conn,$sql4);
			$row=mysqli_fetch_array($result4);
			
			$sub_name=$row['sub_name'];
		    $sub_credit=$row['sub_credit'];

			// $sql5="select sub_credit from subject where sub_code='$_POST[sub_code]'";
			// $result5=mysqli_query($conn,$sql5);
			// $row2=mysqli_fetch_array($result5);
			// $total_credit=$row2['sub_credit'];

			// $_SESSION['sub_code']=$_POST['sub_code'];
			// $sql4="select * from subject where sub_code='$_POST[sub_code]'";
			// $result4=mysqli_query($conn,$sql4);

			// while($row=mysqli_fetch_array($result4))
			// {
		 //       $sub_name=$row['sub_name'];
		 //       $sub_credit=$row['sub_credit'];
		 //    }	
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

				<?php

					if(isset($_SESSION['error_2']))
					{
					echo '<p>'.$_SESSION['error_2']['credit'].'</p>';

					unset($_SESSION['error_2']);
					}
				?>
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF']  ?>" name="reg" ">

					<center>

						<table bgcolor="" width="80%">

					</center>
					<!-- center -->

					

					<tr>
				        <td>DEPT NAME:</td>
				    	<td><select class='form-control' name='dept_name' id='dept_name' onchange='this.form.submit()' onSubmit='return false' >	
				    	<option value="" selected >select dept</option>
				    	<!-- <option value=""></option> -->

							
				       	<?php
				       	$sql1="select distinct(dept) from subject";
						$result1=mysqli_query($conn,$sql1);
						
						while($row=mysqli_fetch_array($result1))
						{
						?>

							<option value="<?php echo $row['dept']; ?>"><?php echo $row['dept']; ?></option>

				       	<?php } ?>

				     	</select></td>
				    </tr>
					  
					<tr>
				        <td>Teacher NAME:</td>
				    	<td><select class='form-control' name='teacher_name' id='teacher_name' onchange='this.form.submit()' onSubmit='return false' >	
				    	<option value="" selected ><?php echo $_SESSION['teacher_name']; ?></option>
				    	
				       	<?php

				       	$sql2="select distinct(tea_name) from teacher where dept='$dept'";
						$result2=mysqli_query($conn,$sql2);

						while($row=mysqli_fetch_array($result2))
						{
						?>
						<option value="<?php echo $row['tea_name']; ?>"><?php echo $row['tea_name']; ?></option>

				       	<?php } ?>

				     	</select></td>
				    </tr>

					<tr>
						<td>Semester:</td>
						<td>
							<select name="semester" class="form-control" onchange='this.form.submit()'>
								<!-- <option value="">select semester</option> -->
								<option value=""><?php echo $_SESSION['semester']; ?></option>
								<option value="FIRST">FIRST</option>
								<option value="SECOND">SECOND</option>
								<option value="THIRD">THIRD </option>
							</select>
						</td>
					</tr>
					
					<tr>
				        <td>Subject code:</td>
				    	<td><select class='form-control' name='sub_code' onchange='this.form.submit()'>

				    	<!-- <option value="">select sub_code</option> -->	
				    	<option value=""><?php echo $_SESSION['sub_code']; ?></option>
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
							
				       	<?php

						// while($row=mysqli_fetch_array($result4))
						// {
						?>
				       	

							<option value="<?php echo $sub_name; ?>"><?php echo $sub_name; ?></option>

				       	<!-- <?php  ?> -->

				     	</select></td>
				    </tr>



					<tr>
				        <td>Subject credit:</td>
				    	<td><select class='form-control' name='sub_credit'>	
							
				       	<?php

						// while($row=mysqli_fetch_array($result5))
						// {
						// ?>
				       	
							
							<option value="<?php echo $sub_credit; ?>"><?php echo $sub_credit; ?></option>


				       	<!-- <?php  ?> -->

				     	</select></td>
				      </tr>

					<tr>
						<td>&nbsp;</td>
						<td>
							<!-- <input class="mini_green_button" type="submit" name="save" value="Submit" disabled="" /> -->
							<?php 

							// if($total_credit<=$_SESSION['total']){
							// 	echo '<input class="mini_green_button" type="submit" name="save" value="Submit" />';
								
							if($sub_credit!=' ' && $sub_credit>1){
								echo '<input class="mini_green_button" type="submit" name="save" value="Submit" />';

								// unset($_SESSION['dept']);
								// unset($_SESSION['teacher_name']);
								// unset($_SESSION['semester']);
								// unset($_SESSION['sub_code']);
								// unset($_SESSION['sub_credit']);
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