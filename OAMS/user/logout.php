<?php
   // session_start();
   
   // if(session_destroy()) {
   // header("location:http://localhost:8080/FINALPROJECT/login_user.php");
   // }
?>

<?php
   //ob_start();
   session_start();
   session_destroy();

   session_unset();
   $_SESSION['user_id'] = NULL;
   $_SESSION['user_password'] = NULL;
   //$_SESSION['EMAIL'] =  NULL;

   // unset($_SESSION["user_id"]);
   // unset($_SESSION["user_password"]);
   
   echo "<script type='text/javascript'>
			                alert('You are logged out');
			            </script>";	
   
   header("location:http://localhost:8082/FINALPROJECT2/loginpage.php")

?>