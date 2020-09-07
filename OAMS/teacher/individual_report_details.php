<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);

//$sid=$_POST['sid'];when direct link in form>action
$stid=$_GET['stid'];


?>



<?php
$pagetitle="student data";
include "header_teacher.php"; ?>


      <!-- <div class="main"> -->

        <div class="content">

                    <div class="text-center">
                        <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Students Record</span>
                        <hr class="team_hr team_hr_right hr_gray" />
                    </div>  <!-- text-center -->
 
            <!-- <br><br><br>
                    <a href="student_entry.php" class=" tiny_button ">+Insert</a> -->
                    <br>
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
                  <th>SUBJECT</th>
                  <th>PERCENTAGE</th>
                  <th>STATUS</th>
                  </tr>";

            // if(isset($_POST['search']))
            // {


                  mysqli_select_db($conn,$dbname);
                  $veiw=mysqli_query($conn,"select * from bhup order by rn asc");

                  

                  $query3=mysqli_query($conn,"Select * from attd_tbl T inner join bhup st on st.rn=T.std_id where rn='$stid' group by st.rn,T.subject");

                  while($row=mysqli_fetch_row($query3))
                  {
                    echo"<tr>";
                        echo '<td>'. $row[0] . '</td>';
                        //echo '<td>'. $row[5] . '</td>';
                        echo '<td>'. $row[6] . '</td>';
                        echo '<td>'. $row[7] . '</td>';
                        echo '<td>'. $row[8] . '</td>';
                        echo '<td>'. $row[10] . '</td>';
                        echo '<td>'. $row[11] . '</td>';
                        echo '<td>'. $row[12] . '</td>';
                        echo '<td>'. $row[13] . '</td>';
                        echo '<td>'. $row[14] . '</td>';
                        echo '<td>'. $row[02] . '</td>';
                    
                    // $query=mysqli_query($conn,"Select  (select count(*) from attd_tbl where attendance='P' and std_id='342' and subject='A')/(Select count(*) from attd_tbl where std_id='342' and subject='A')*100 as per from attd_tbl  group by per asc ");

                    // $query=mysqli_query($conn,"Select  (select count(*) from attd_tbl where attendance='P' and std_id='$row[0]' and subject='$row[2]')/(Select count (attendance) from attd_tbl where std_id='$row[0]' and subject='$row[2]')*100 as per from attd_tbl where std_id='$row[0]' and subject='$row[2]' group by per asc ");


                  $query=mysqli_query($conn,"Select (Select count(*) from attd_tbl Where attendance='P' and std_id='$row[0]' and subject='$row[2]')/ count(attendance)  *100 as per from attd_tbl where std_id='$row[0]' and subject='$row[2]'");
                     
                  while ($row2=mysqli_fetch_row($query))
                    {
                       echo '<td>'. $row2[0] . '%</td>';

                        if($row2[0]>=75)
                        {
                        echo "<td><span style='color:green;'>Collegiate</span></td>";

                        }

                        if($row2[0]>=60 && $row2[0]<75)
                        {
                        echo "<td><span style='color:blue;'>Non-collegiate</span></td>";

                        }

                        if($row2[0]<60)
                        {
                        echo "<td><span style='color:red;'>Discollegiate</span></td>";

                        }
                          // if($row2[0]<30)
                          // {
                          // echo "<td><span style='color:red;'>dropped</span></td>";

                          // }
                          // else
                          // echo "<td><span style='color:green;'>Promoted</span></td>";

                     }  //while
                     echo"</tr>";
                  } //while
            echo"</center></table>";
          // }


          ?>
          </center>

        </div> <!-- content -->


  
<?php include "footer.php"; ?>  
