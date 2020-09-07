<?php
$pagetitle="student data";
include "header_loginpage.php"; ?>

<?php
session_start();
if(isset($_SESSION['error']))
{
// echo '<p>'.$_SESSION['error']['username'].'</p>';
// echo '<p>'.$_SESSION['error']['email'].'</p>';
// echo '<p>'.$_SESSION['error']['password'].'</p>';

echo "<script type='text/javascript'>
      
        alert('This Username or Email is already used.');
    </script>";

unset($_SESSION['error']);
}
?>


			<div class="main">

				<div class="content">

                    <div class="text-center">
                        <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Please Signup</span>
                        <hr class="team_hr team_hr_right hr_gray" />
                    </div>  <!-- text-center -->
 
				    <br><br><br>

				    <center>
				    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="signup_action.php">
                                <div class="form-group">
                                    <input class="form-control" placeholder="User ID" name="username" type="text" required  autofocus >

                                    <!-- <label for="name" class="l"> UserName(*) </label><br>
				            		<input class="form-control" type="text" name="username" placeholder="User name" id="name" value="" required> -->
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="email" value="" required>

                                    <!-- <label for="email" class="l"> Email(*) </label><br>
				            		<input class="form-control" type="email" name="email" placeholder="Email" id="email" value="" required> -->

                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required>

                                   <!--  <label for="password" class="l"> Password </label><br>
				            		<input class="form-control" type="password" name="password" placeholder="Password" id="password" value="" required> -->
                                </div>
                                <div class="checkbox">
                                    <label> <input name="remember" type="checkbox" value="Remember Me">  Remember Me</label>
                                </div>
                                <!-- <button type="sumbit" name="submit" value="" class="btn-blue">Sign Up</button>  --> 
                                <input class="btn-blue" placeholder="sd" name="submit" type="submit" value="Signup">

                        </form>
                    </div>
                </div>
            </div>
            </center>
                    

				</div> <!-- content -->


<?php include "footer.php"; ?>	