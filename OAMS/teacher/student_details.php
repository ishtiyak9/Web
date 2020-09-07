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
                        <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Students Records</span>
                        <hr class="team_hr team_hr_right hr_gray" />
                    </div>  <!-- text-center -->
 
				    <br><br>
                    

                    <form action="student_details_individual.php" method="POST" name="reg" onSubmit="return validate()">

                    <div  class="row"> <!-- id="C" -->

                    <div style="background-color: #4C5A65;padding: 15px 15px 0px 15px;border-radius: 5px; float:right;">
				            
				        <div class="form-group">
				            <input class="form-control3" type="text" name="sid" placeholder="     student id" id="sid" value="" required>
				        </div><!-- <br> -->

				        <div class="form-group">
					    <input class="search_btn2" type="submit" name="search" value="Search">
					    </div>

					</div>


			        </div> <!--row-->
			        </form>

                    <!-- <div class="pf">  -->
                    <center>
					<?php

					// $dbhost="localhost";
					// $dbuser="root";
					// $dbpass="";
					// $dbname="sis";
					// $conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

					// mysqli_select_db($conn,$dbname);

					// $sel=$_POST['sel'];
					// $ty=$_POST['ty'];
					echo"<center><table >";
					  	echo"<tr>
					   
					        <th>ROLL NO</th>
					        <th>FIRST NAME</th>
					        <th>LAST NAME</th>
					        <th>SESSION</th>
					        <th>BRANCH</th>
					        <th>YEAR</th>
					        <th>SEMESTER</th>
					        <th>DOB</th>
					        <th>ADDRESS</th>
					        </tr>";

					// if(isset($_POST['se1']))
					// {


						mysqli_select_db($conn,$dbname);
			            $query=mysqli_query($conn,"select * from bhup order by rn asc");
			            // $veiw = $db->get_all_std($conn,'student_table',10);

			            

			            
			            // foreach ($query as $post) 
			            // {
			            // 	$std_id = $post['rn'];
			  
			          		// echo '<tr>';         
				           //  echo '<td>'. $post['rn'] . '</td>';
				           //  echo '<td>'. $post['fname'] . '</td>';
				           //  echo '<td>'. $post['lname'] . '</td>';
				           //  echo '<td>'. $post['session'] . '</td>';
				           //  echo '<td>'. $post['branch'] . '</td>';
				           //  echo '<td>'. $post['year'] . '</td>';
				           //  echo '<td>'. $post['semester'] . '</td>';
				           //  echo '<td>'. $post['dob'] . '</td>';
				           //  echo '<td>'. $post['address'] . '</td>';
			            while($row=mysqli_fetch_row($query))
				      	{

				            echo"<tr>";
				                echo '<td>'. $row[3] . '</td>';
				                echo '<td>'. $row[0] . '</td>';
				      			echo '<td>'. $row[1] . '</td>';
				      			echo '<td>'. $row[2] . '</td>';
				      			echo '<td>'. $row[4] . '</td>';
				      			echo '<td>'. $row[5] . '</td>';
				      			echo '<td>'. $row[6] . '</td>';
				      			echo '<td>'. $row[7] . '</td>';
				      			echo '<td>'. $row[8] . '</td>';

							echo "</tr>";
					        }
         
					  echo"</center></table>";
					// }


					?>
					</center>
					<!-- </div> pf -->

					<?php echo $sid;?>


				</div> <!-- content -->

	
<?php include "footer.php"; ?>	