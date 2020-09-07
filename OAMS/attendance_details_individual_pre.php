<?php
  if (isset($_POST["search"])) 
    {

		$sid=$_POST["sid"];

		header("location:http://localhost:8082/FINALPROJECT2/attendance_details_individual.php?sid={$sid}");

    }

?>

<?php
$pagetitle="student data";
include "include/header.php"; ?>


			<div class="main">

				<div class="content">

                    <div class="text-center">
                        <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Students Search Form</span>
                        <hr class="team_hr team_hr_right hr_gray" />
                    </div>  <!-- text-center -->
                    <br><br><br>

                    <center>
 
		            <form action="" method="POST" name="reg" onSubmit="return validate()">

			          <div  class="row"> <!-- id="C" -->
				            
				        <div class="form-group">
				            <!-- <label for="name" class="l"> Student ID(*) </label><br> -->
				            <input class="form-control2" type="text" name="sid" placeholder="student id" id="sid" value="" required>
				        </div><!-- <br> -->

				       <!--  <div class="form-group">
				            <label for="name" class="l"> Student Name(*) </label><br>
				            <input class="form-control2" type="text" name="name" placeholder="student name" id="name" value="">
				        </div><br>
 -->
				       <!--  <div class="form-group">
				        	<label for="semester"  class="l">Semester</label><br>
				            <select  class="form-control" name="semester"  required id="semester" >
				            <option>---select semester--- </option>
				            <option>1st</option>
				            <option>2nd</option>
				            <option>3rd</option> 
				            <option>4th</option>
				            <option>5th</option>
				            <option>6th</option>
				            <option>7th</option>
				            <option>8th</option>
				            </select>
				        </div> <br> -->

				        <div class="form-group">
					    <input class="search_btn" type="submit" name="search" value="Search">
					    </div>


			          </div> <!--row-->

			        </form> <br><br><br><br>

			        </center>

      				
				</div> <!-- content -->


<?php include "include/footer.php"; ?>	