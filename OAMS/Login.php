<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT username FROM admin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location:http://localhost:8082/FINALPROJECT2/student_details.php");
      }else {
         // $error = "Your Login Name or Password is invalid";
         echo "<script type='text/javascript'>
                      alert('Your username and password is invalid');
                  </script>";
      }
   }

   session_destroy();
?>
<?php
$pagetitle="student data";
include "include/header_loginpage.php"; ?>

<div class="main">

            <div class="content">

                    <div class="text-center">
                        <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Please Login</span>
                        <hr class="team_hr team_hr_right hr_gray" />
                    </div>  <!-- text-center -->
 
                <br><br><br>

                <center>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action=" ">
                                <div class="form-group">
                                    <input class="form-control" placeholder="User ID" name="username" type="text" required >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                </div>
                                <div class="checkbox">
                                    <label> <input name="remember" type="checkbox" value="Remember Me">  Remember Me</label>
                                </div>
                                <!-- <button type="sumbit" name="submit" value="login" class="btn-green">Login</button> -->
                                <input class="btn-green" placeholder="sd" name="submit" type="submit" value="Login"> 
                                <div class="loginref">
                                 <!-- <a style="float:left;" href="signup.php">New user? Register here</a> -->

                                
                                </div> 
                        </form>
                    </div>
                </div>
            </div>
            </center>
                    

            </div> <!-- content -->


<?php include "include/footer.php"; ?> 