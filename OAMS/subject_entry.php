<?php
		$dbhost="localhost";
		$dbuser="root";
		$dbpass="";
		$dbname="sis";
		$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

		mysqli_select_db($conn,$dbname);
		$sql="select distinct(semester) from bhup";
		$result=mysqli_query($conn,$sql);
		$sql1="select distinct(teacher_name) from teacher";
		$result1=mysqli_query($conn,$sql1);
?>

<?php
$pagetitle="subject data";
include "include/header.php"; ?>




			<div class="main">

				<div class="content">

                    <div class="text-center">
                        <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Students Entry</span>
                        <hr class="team_hr team_hr_right hr_gray" />
                    </div>  <!-- text-center -->

                    <?php
					session_start();
					if(isset($_SESSION['error']))
					{
					//echo '<p>'.$_SESSION['error']['credit'].'</p>';
					echo "<script type='text/javascript'>
					      
					        alert('Credit cannot be more than three');
					    </script>";

					unset($_SESSION['error']);
					}

					if(isset($_SESSION['error_2']))
					{
					//echo '<p>'.$_SESSION['error_2']['credit'].'</p>';
					echo "<script type='text/javascript'>
					      
					        alert('Credit Limit is over for this Teacher');
					    </script>";

					unset($_SESSION['error_2']);
					}
					?>
					 
			        <br><br>

      				<form method="POST" action="subject_entry_action.php" name="reg" onSubmit="return validate()">

      				<center>
 
      				<table bgcolor="" width="80%"> 

     				</center>  <!-- center -->

				      <tr>
				        <td>SUBJECT ID:</td>
				        <td><input type="text" name="subjid" class="form-control" value="<?php echo @$_POST['subjid'];?>" required/></td>
				      </tr>

				      <tr>
				        <td>SUBJECT NAME:</td>
				        <td><input type="text" name="subjname" class="form-control" value="<?php echo @$_POST['subjname'];?>" required /></td>
				      </tr>

				      <tr>
				        <td>SUBJECT CREDIT:</td>
				        <td><input type="text" name="subjcd" class="form-control" value="<?php echo @$_POST['subjcd'];?>" required/></td>
				      </tr>

				       <!-- <tr>
				        <td>TEACHER NAME:</td>
				        <td><input type="text" name="tname" class="form-control" required /></td>
				      </tr> -->

				      <tr>
				        <td>TEACHER NAME:</td>
				    	<td><select class='form-control' name='tname' required>	<option >select teacher_name</option>		
				       	<?php

						while($row=mysqli_fetch_array($result1))
						{
						?>
				       		<option value="<?php echo $row['teacher_name']; ?>"><?php echo $row['teacher_name']; ?></option>

				       	<?php } ?>

				     	</select></td>
				      </tr>

				      <tr>
				        <td>DEPARTMENT</td>
				        <td>
				        <select name="branch" class="form-control" required>
				        <option >select department</option>
				        <option value="CSE">CSE</option>
				        <option value="ET&T">ET&T</option>
				        <option value="CIVIL">CIVIL</option>
				        <option value="MECHNICAL">MECHNICAL</option>
				        <option value="EEE">EEE</option>
				        </select>
				        </td>
				      </tr>

				      <tr>
				        <td>SEMESTER:</td>
				        <td>
				        <select name="semester" class="form-control" required>
				        <option >select semester</option>
				        <?php
						while($row=mysqli_fetch_array($result))
						{
						?>
				       		<option value="<?php echo $row['semester']; ?>"><?php echo $row['semester']; ?></option>

				       	<?php } ?>
				        </select>
				        </td>
				      </tr>
 
				      <tr>
				        <td>&nbsp;</td>
				        <td><input class="mini_green_button" type="submit" name="submit" value="ADD" /></td>
				      </tr>
     				</table><br><br>

      				</form>


				</div> <!-- content -->


<?php include "include/footer.php"; ?>	