<?php
$pagetitle="student data";
include "include/header.php"; ?>


			<div class="main">

				<div class="content">

                    <div class="text-center">
                        <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Teachers Entry</span>
                        <hr class="team_hr team_hr_right hr_gray" />
                    </div>  <!-- text-center -->
 
				    <!-- <br><br><br>
                    <a href="student_entry.php" class=" tiny_button ">+Insert</a>
                    <br><br> -->

                    <!-- <h6 class="or">or</h6> -->
                    <br><br>
            
		
      				<form method="POST" action="teacher_entry_action.php" name="reg" onSubmit="return validate()">

      				<center>
 
      				<table bgcolor="" width="80%"> 

     				</center>  <!-- center -->

				      <tr>
				        <td>TEACHER NAME:</td>
				        <td><input type="text" name="teacher_name" class="form-control" required/></td>
				      </tr>

				      <tr>
				        <td>USER ID:</td>
				        <td><input type="text" name="user_id" class="form-control" required /></td>
				      </tr>
				    
				      <tr>
				        <td>DEPARTMENT</td>
				        <td>
				        <select name="dept_name" class="form-control" required>
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
				        <td>DATE OF BIRTH:</td>
				        <td><input type="date" name="dob" class="form-control" placeholder="<?php echo date('Y-m-d')?>" required /></td>
				      </tr>

				      <tr>
				        <td>ADDRESS:</td>
				        <td><input type="text" name="address" class="form-control" required /></td>
				      </tr>

				      <tr>
				        <td>PHONE NO:</td>
				        <td><input name="phone_no" onkeypress="return event.charCode>=48 && event.charCode<=57" oninput="javascript:if(this.value.length>this.maxLength) this.value=this.value.slice(0,this.maxLength);" type="text" maxlength="11" class="form-control" placeholder="xxxxxxxxxxx" required /></td>
				      </tr>
				      
				      <tr>
				        <td>&nbsp;</td>
				        <td><input class="mini_green_button" type="submit" name="submit" value="ADD" /></td>
				      </tr>
     				</table><br><br>

      				</form>


				</div> <!-- content -->


<?php include "include/footer.php"; ?>	