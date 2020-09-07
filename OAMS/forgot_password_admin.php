<?php
    $dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="sis";
	$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

	mysqli_select_db($conn,$dbname);

    if (isset($_POST["submit"])) 
    {


		if (isset($_POST["username"]) && !empty($_POST["username"]) ) 
		{

			$username=$_POST["username"];
			// $password=$_POST["password"];

			$query="select * from admin where username='$username'";

			$result=mysqli_query($conn,$query);
			$row=mysqli_fetch_array($result);


	
	
			if ($row["username"]==$username ) 
			{

				header("location:http://localhost:8082/FINALPROJECT/update_password_admin.php?sid={$username}");

				// header("location:http://localhost:8080/project/index.html");

			}
			
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
include "include/header_loginpage.php"; ?>


			<div class="main">

				<div class="content">

                    <div class="text-center">
                        <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Enter User ID</span>
                        <hr class="team_hr team_hr_right hr_gray" />
                    </div>  <!-- text-center -->
 
				    <br><br><br>

				    <center>
				    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Enter Your ID</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action=" ">
                                <div class="form-group">
                                    <input class="form-control" placeholder="User ID" name="username" type="username" required autofocus>
                                </div>
                               
                                <div class="checkbox">
                                    <label> <input name="remember" type="checkbox" value="Remember Me">  Remember Me</label>
                                </div>
                                <!-- <button type="sumbit" name="submit" value="login" class="btn-green">Login</button> -->
                                <input class="btn-green" placeholder="sd" name="submit" type="submit" value="Submit"> 
                                 
                        </form>
                    </div>
                </div>
            </div>
            </center>
                    

				</div> <!-- content -->


<?php include "include/footer.php"; ?>	