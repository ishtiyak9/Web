<?php
	include 'dashboard\lib\Session.php';
	Session::checkLogin();

	include 'dashboard\classes\Login.php';
?>
<?php
	$ul = new Login();
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Hospital Management System | Login Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="dashboard/assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="dashboard/assets/css/style.css" rel='stylesheet' type='text/css' />
	<!-- font CSS -->
	<!-- font-awesome icons -->
	<link href="dashboard/assets/css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	 <!-- js-->
	<script src="dashboard/assets/js/jquery-1.11.1.min.js"></script>
	<script src="dashboard/assets/js/modernizr.custom.js"></script>
	<!--webfonts-->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<!--//webfonts--> 
	<!--animate-->
	<link href="dashboard/assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="dashboard/assets/js/wow.min.js"></script>
		<script>
			 new WOW().init();
		</script>
	<!--//end-animate-->

</head> 
<body>
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['userSignIn'])) {
		$user_login = $ul->userLogin($_POST);
	}
?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<div style="height: 10vh;"></div>
				<div class="widget-shadow">
					<div class="login-top">
						<h2>Log In</h2>
					</div>
					<div class="login-body">
<?php
	if (isset($user_login)) {
		echo $user_login;
	}
?>
						<form action="" method="post">
							<label for="1">Enter email :</label>
							<input type="text" class="user" id="1" name="email" placeholder="Enter your email">
							<label for="2">Enter password :</label>
							<input type="password" id="2" name="password" class="lock" placeholder="password">
							<label for="3">User role :</label>
							<select id="3" name="user_role">
								<option value="1">admin</option>
								<option value="2">doctor</option>
								<option value="2">patient</option>
							</select>

							<input type="submit" name="userSignIn" value="Sign In">
							
							<div class="forgot-grid">
								<label class="checkbox"><input type="checkbox" name="" checked=""><i></i>Remember me</label>
								<div class="forgot">
									<a href="#">forgot password?</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</form>
					</div>
				</div>
				
				<div class="login-page-bottom">
					<br>
					<div class="social-btn"><a href="#"><i class="fa fa-home"></i><i>Back To Home</i></a></div>
					<div class="social-btn"><a href="#"><i>Not a Member?</i><i class="fa fa-sign-in"></i></a></div>
				</div>
			</div>
		</div>

	<!-- Classie -->
		<script src="dashboard/assets/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="dashboard/assets/js/jquery.nicescroll.js"></script>
	<script src="dashboard/assets/js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="dashboard/assets/js/bootstrap.js"> </script>
</body>
</html>