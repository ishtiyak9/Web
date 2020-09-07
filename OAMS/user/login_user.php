<?php
error_reporting(E_ALL & ~ E_NOTICE);

ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_NAME'];
$http_referer=$_SERVER['http_referer'];
$pagetitle="LogIn Page";

function loggedin()
{
	if (isset($_SESSION['user_id']) && !empty ($_SESSION['user_id'])) 
		return true;
	else
		return false;
}


if(loggedin()){
	echo "<script type='text/javascript'>
			                alert('You are logged in');
			            </script>";
	$username=$_SESSION['user_id'];
	// header("location:http://localhost:8080/FINALPROJECT/header_user.php?sid={$username}");
	header("location:http://localhost:8082/FINALPROJECT2/user/individual_report_details_2.php");		            
	}
	else
	{
		// header("location:http://localhost:8080/FINALPROJECT/login_user.php");
	}


?>

<?php
    $dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="sis";
	$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

	mysqli_select_db($conn,$dbname);

    if (isset($_POST["submit"])) 
    {


		if (isset($_POST["username"]) && !empty($_POST["username"]) && isset($_POST["password"])  && !empty($_POST["password"]) ) 
		{

			$username=$_POST["username"];
			$password=$_POST["password"];

			$query="select * from signup_tbl where username='$username' AND password='$password'";

			$result=mysqli_query($conn,$query);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			//new
			$active = $row['active'];
			$count = mysqli_num_rows($result);

			if($count == 1) 
			{
	         //session_register("myusername");
	         $_SESSION['user_id'] = $username;
	         $_SESSION['user_password'] = $password;

	         $_SESSION['valid'] = true;
             $_SESSION['timeout'] = time();
             //$_SESSION['username'] = 'tutorialspoint';
	         
	         header("location:http://localhost:8082/FINALPROJECT2/user/individual_report_details_2.php");

	         // header("location:http://localhost:8080/FINALPROJECT/header_user.php?sid={$username}");
	         
	         echo "<script type='text/javascript'>
			                alert('You are logged in');
			            </script>";
	         
	         
	     	 }//new


	
	
			// if ($row["username"]==$username && $row["password"]==$password) 
			// {

			// 	$_SESSION['username']=$username;

			// 	header("location:http://localhost:8080/FINALPROJECT/individual_marking_details.php?sid={$username}");

			// 	echo "<script type='text/javascript'>
			//                 alert('You are logged in');
			//             </script>";	
			// }
			
			else
			{

				 echo "<script type='text/javascript'>
			                alert('Please Enter Valid User Name & Password !');
			            </script>";
			}
		}

		// else
		// {

		// 	$username="";
		//     $password="";
		// 	 echo "<script type='text/javascript'>
	 //                alert('Please Enter User Name & Password !');
	 //            </script>";
		// }
				
	}
	
	// else
	// {
	// 	$username="";
	// 	$password="";
	// }

?>

<?php
$pagetitle="student data";
include "header_loginpage.php"; ?>


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
                                	<a style="float:left;" href="signup.php">New user? Register here</a>

                                	<a style="float:right;" href="forgot_password.php">Forgot Password?</a>
                                </div> 
                        </form>
                    </div>
                </div>
            </div>
            </center>
                    

				</div> <!-- content -->


<?php include "footer.php"; ?>	