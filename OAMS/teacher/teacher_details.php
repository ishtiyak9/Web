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
include "header_teacher.php"; ?>


			<!-- <div class="main"> -->

				<div class="content">

                    <div class="text-center">
                        <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Teacher Records</span>
                        <hr class="team_hr team_hr_right hr_gray" />
                    </div>  <!-- text-center -->
                    <br><br>

                    <!-- <div class="pf">  -->
                    <center>
					<?php

					echo"<center><table >";
					  	echo"<tr>
					   
					        <th>Teacher Name</th>
							<th>Teacher Id</th>
							<th>Department Name</th>
							<th>Date of birth</th>
						    <th>Address</th>
							<th>Phone no</th>
					        </tr>";

						mysqli_select_db($conn,$dbname);
			            $query=mysqli_query($conn,"select * from teacher order by teacher_name");
			            while($row=mysqli_fetch_array($query))
				      	{

				            echo"<tr>";
				      			echo '<td>'. $row['teacher_name'] . '</td>';
				      			echo '<td>'. $row['teacher_id'] . '</td>';
				      			echo '<td>'. $row['dept_name'] . '</td>';
				      			echo '<td>'. $row['dob'] . '</td>';
				      			echo '<td>'. $row['address'] . '</td>';
				      			echo '<td>'. $row['phone_no'] . '</td>';

							echo "</tr>";
					        }
         
					  echo"</center></table>";
					// }


					?>
					</center>
					<!-- </div> pf -->


				</div> <!-- content -->

	
<?php include "include/footer.php"; ?>	