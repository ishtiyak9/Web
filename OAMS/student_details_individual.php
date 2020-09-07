<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);
$sid=$_POST['sid'];

?>

<?php
          if (isset($_GET['rn'])) {
            $id = $_GET['rn'];

          }
?>

<?php
$pagetitle="student data";
include "include/header.php"; ?>


			<!-- <div class="main"> -->

				<div class="content">

                    <div class="text-center">
                        <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Students Records</span>
                        <hr class="team_hr team_hr_right hr_gray" />
                    </div>  <!-- text-center -->
 
				    <br><br><br>

				    <!-- <a href="student_details.php" class=" tiny_button ">Back</a> -->

				    <!-- <br><br>
 -->
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
					        <th><center>Action</center></th>
					        </tr>";

					// if(isset($_POST['se1']))
					// {


						mysqli_select_db($conn,$dbname);
			            $query=mysqli_query($conn,"select * from bhup where rn='$sid' order by rn asc");
			           
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
				      			
				            echo "<td width=220px>";

							echo '<a class="mini_green_button" href="student_update_action.php?rn='.$row[3].'">Update</a>';

							echo "<a class='or'>or</a>";  

							echo '<a style="margin-left:-0px;" class="mini_red_button" href="student_delete_action.php?rn='.$row[3].'">Delete</a>';
							echo "</td>";

							echo "</tr>";
					        }
         
					  echo"</center></table>";
					// }


					?>
					</center>
					<!-- </div> pf -->
					<br>
					<a href="student_details.php" class=" tiny_button ">Back</a>


				</div> <!-- content -->

	
<?php include "footer.php"; ?>	