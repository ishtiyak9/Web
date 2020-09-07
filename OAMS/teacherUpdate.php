<?php
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);
$tid=$_GET['id'];
$sql = "SELECT * FROM teacher WHERE teacher_name = '$_GET[id]' ";
$result = mysqli_query ($conn,$sql);

  while ($row = mysqli_fetch_array ($result))
  {
    $teacher_name=$row['teacher_name'];
    $teacher_id=$row['teacher_id'];
    $dept_name=$row['dept_name'];
    $dob=$row['dob'];
    $address=$row['address'];
    $phone_no=$row['phone_no'];

  }

?>

<?php
$pagetitle="student data";
include "include/header.php"; ?>


			<div class="main">

				<div class="content">

                    <div class="text-center">
                        <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Teacher Entry</span>
                        <hr class="team_hr team_hr_right hr_gray" />
                    </div>  <!-- text-center -->
 
				    <!-- <br><br><br>
                    <a href="student_entry.php" class=" tiny_button ">+Insert</a>
                    <br><br> -->

                    <!-- <h6 class="or">or</h6> -->
                    <br><br>
            
		
      				<form method="POST" action="teacher_update_action.php?id=<?php echo $tid;?>" name="reg" onSubmit="return validate()">

      				<center>
 
      				<table bgcolor="" width="80%"> 

     				</center>  <!-- center -->

				      <tr>
				        <td>NAME:</td>
				        <td><input type="text" name="teacher_name" class="form-control" value="<?php echo $teacher_name; ?>" required/></td>
				      </tr>

				      <tr>
				        <td>USER ID:</td>
				        <td><input type="text" name="user_id" class="form-control" value="<?php echo $teacher_id; ?>" required /></td>
				      </tr>
				    
				      <tr>
				        <td>DEPARTMENT</td>
				        <td>
				        <select name="dept_name" class="form-control" required>
				        <option ><?php echo $dept_name; ?></option>
				        <option value="CSE">CSE</option>
				        <option value="ET&T">ET&T</option>
				        <option value="CIVIL">CIVIL</option>
				        <option value="MECHNICAL">MECHNICAL</option>
				        <option value="EEE">EEE</option>
				        </select>
				        </td>
				      </tr>

				      <tr>
				        <td>DATE OF BIRTH:</td>
				        <td><input type="date" name="dob" class="form-control" placeholder="yyyy-mm-dd" value="<?php echo $dob; ?>" required /></td>
				      </tr>

				      <tr>
				        <td>ADDRESS:</td>
				        <td><input type="text" name="address" class="form-control" value="<?php echo $address; ?>" required /></td>
				      </tr>

				       <tr>
				        <td>PHONE NO:</td>
				        <td><input name="phone_no" onkeypress="return event.charCode>=48 && event.charCode<=57" oninput="javascript:if(this.value.length>this.maxLength) this.value=this.value.slice(0,this.maxLength);" type="text" maxlength="11" class="form-control" value="<?php echo $phone_no; ?>" required /></td>
				      </tr>
				      
				      <tr>
				        <td>&nbsp;</td>
				        <td><input class="mini_green_button" type="submit" name="submit" value="ADD" /></td>
				      </tr>
     				</table><br><br>

      				</form>


				</div> <!-- content -->


<?php include "include/footer.php"; ?>	