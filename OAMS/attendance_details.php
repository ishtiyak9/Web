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


			<!-- <div class="main"> -->

				<div class="content">

                    <div class="text-center">
                        <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Attendance Details</span>
                        <hr class="team_hr team_hr_right hr_gray" />
                    </div>  <!-- text-center -->
 
				    <br>
                    

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
					        <th>SEMESTER</th>

					        <th>SUBJECT</th>

					        
					        <th>DATE</th>

					        <th>ATTENDANCE</th>
					        
					        </tr>";

					// if(isset($_POST['se1']))
					// {


						mysqli_select_db($conn,$dbname);

			            // $query=mysqli_query($conn,"Select * from attd_tbl order by std_id,subject");

			            $query=mysqli_query($conn,"Select * from attd_tbl group by date,semester,subject,std_id");

			            while($row=mysqli_fetch_row($query))
				      	{
				        		echo"<tr>";
				                echo '<td>'. $row[0] . '</td>';
				                echo '<td>'. $row[1] . '</td>';
				      			echo '<td>'. $row[2] . '</td>';
				      			echo '<td>'. $row[3] . '</td>';
				      			echo '<td>'. $row[4] . '</td>';
				      			
							   echo"</tr>";
				      } //while
					  echo"</center></table>";
					// }


					?>
					</center>
					<!-- </div> pf -->


				</div> <!-- content -->

	
<?php include "include/footer.php"; ?>	