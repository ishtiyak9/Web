<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);
$sid=$_GET["sid"];
$sql="select * from teacher_signup_tbl  where username='$sid'";
$result=mysqli_query($conn,$sql);

?>

<?php
$pagetitle="student data";
include "header_loginpage.php"; ?>


			<div class="main">

				<div class="content">

                    <div class="text-center">
                        <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Updating Password</span>
                        <hr class="team_hr team_hr_right hr_gray" />
                    </div>  <!-- text-center -->
 
				    <br><br><br>

				    <center>
				    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Update Your Password</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="update_password_action_teacher.php">
                                <div class="form-group">

                                <?php
                                while($row=mysqli_fetch_array($result))
                                {
                                ?>
                                    <input class="form-control" placeholder="User ID" name="username" value="<?php echo $row['username']; ?>" type="username" required autofocus>

                                <?php } ?>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="New Password" name="password" type="password" value="" required>
                                </div>
                               
                                <div class="checkbox">
                                    <label> <input name="remember" type="checkbox" value="Remember Me">  Remember Me</label>
                                </div>
                                
                                <input class="btn-green" placeholder="sd" name="update" type="submit" value="Update"> 
                                 
                        </form>
                    </div>
                </div>
            </div>
            </center>
                    

				</div> <!-- content -->


<?php include "footer.php"; ?>	