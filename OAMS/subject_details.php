<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);

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
                        <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Subject Records</span>
                        <hr class="team_hr team_hr_right hr_gray" />
                    </div>  <!-- text-center -->
 
				    <br><br><br>
                    <a href="index_2.php" class=" tiny_button ">+Insert</a>
                    <br><br><br><br>

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
					   
					        <th>SUBJECT ID</th>
					        <th>SUBJECT NAME</th>
					        <th>SUBJECT CREDIT</th>
					        <th>TEACHER NAME</th>
					        <th>TEACHER ID</th>
					        <th>DEPARTMENT</th>
					        <th>SEMESTER</th>
					        <th>ACTION</th>
					        </tr>";

					// if(isset($_POST['se1']))
					// {


						mysqli_select_db($conn,$dbname);
			            $query=mysqli_query($conn,"select * from sub_tbl order by subject_code asc");
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
				                
				                echo '<td>'. $row[0] . '</td>';
				      			echo '<td>'. $row[1] . '</td>';
				      			echo '<td>'. $row[2] . '</td>';
				      			echo '<td>'. $row[3] . '</td>';
				      			echo '<td>'. $row[4] . '</td>';
				      			echo '<td>'. $row[5] . '</td>';
				      			echo '<td>'. $row[6] . '</td>';

				      			
				      			
				            echo "<td width=220px>";

							// echo '<a class="mini_green_button" href="subject_update_action.php?subcode='.$row[0].'">Update</a>';
							echo '<a class="mini_green_button" href="index_update.php?subcode='.$row[0].'">Update</a>';

							echo "<a class='or'>or</a>";  

							echo '<a style="margin-left:-0px;" class="mini_red_button" name="delete" onclick="return checkDelete()" href="subject_delete_action.php?subcode='.$row[0].'">Delete</a>';

							// echo '<a class="mini_red_button" name="delete" onclick="return checkDelete()" href="subject_delete_action.php?subcode='.$row[0].'">Delete</a>';


							echo "</td>";

							echo "</tr>";
					        }
         
					  echo"</center></table>";
					// }


					?>
					</center>
					<!-- </div> pf -->


				</div> <!-- content -->

				<script language="JavaScript" type="text/javascript">
				function checkDelete(){
				return confirm('Are you sure?');
				}
				</script>

	
<?php include "include/footer.php"; ?>	