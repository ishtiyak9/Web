
<!-- <!DOCTYPE html> -->
<!-- <html lang="en"> -->
<?php
session_start();

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);

// $sid=$_POST['sid']; when direct link in form>action
//$sid=$_GET['sid'];
$sid=$_SESSION['user_id'];

$count=0;
$sqln="SELECT * FROM notification WHERE status = 0";
$resultn=mysqli_query($conn, $sqln);
$count=mysqli_num_rows($resultn);

?>
<html >

	<head>
		<title><?php echo $pagetitle; ?></title>
		<link rel="stylesheet" href="http://localhost:8082/FINALPROJECT2/css/C.css" type="text/css">
		<link rel="stylesheet" href="style.css" type="text/css">



		<script type="text/javascript" src="jquery-2.1.1.min.js"></script>

		<script type="text/javascript" >
			$(document).ready(function()
			{
			$("#notificationLink").click(function()
			{
			$("#notificationContainer").fadeToggle(300);
			$("#notification_count").fadeOut("slow");
			return false;
			});

			//Document Click
			$(document).click(function()
			{
			$("#notificationContainer").hide();
			});
			//Popup Click
			$("#notificationContainer").click(function()
			{
			return false
			});

			});

			$(document).ready(function()
			{
				// var hei=$('#notificationsBody').height();	
				// var heii=$('#notificationsBody').width();
			});

			function myFunction() {
			$.ajax({
					url: "view_notification.php",
					//type: "POST",
					processData:false,
					success: function(data){
						$("#notification-count").remove();					
						$("#notification-latest").show();$("#notification-latest").html(data);
					},
					error: function(){}           
				});
			}


			 function myFunction2() {
				$.ajax({
					url: "all_notification.php",
					//type: "POST",
					processData:false,
					success: function(data){
						// $("#notification-count").remove();					
						$("#notification-latest").show();$("#notification-latest").html(data);
					},
					error: function(){}           
				});
			 }


		 
		//  $(document).ready(function() {
		// 	$('page').click(function(e){
		// 		if ( e.target.id != 'notification_li'){
		// 			$("#notification-latest").hide();
		// 		}
		// 	});
		// });	 
		</script>

		<script type="text/javascript">
		function random_no(){
		          // var ran=Math.random();
		          $.ajax({
                        
                        url:'ajaxData.php',
                        success:function(html){
                            $('#random_no_container').html(html);
                        }
                    }); 

		          // jQuery('#random_no_container').html(ran);
		           }
		           
		window.setInterval(function(){
		             /// call your function here
		             random_no();
		          }, 6000);  // Change Interval here to test. For eg: 500 for 5 sec

		</script>
	</head>


	<body>

		<div id="page">

			<div class="header">

				<img src="http://localhost:8082/FINALPROJECT2/image/vu.jpg" alt="logo" width="350" height="104" align="left">

				<ul class="nav">
				<br><br>
					<li style="margin-left:25%;border-left:0px solid #bbb"><a href="#?">Home</a></li>
					
					<li><a href="http://localhost:8082/FINALPROJECT2/user/individual_report_details_2.php">Overall Report</a></li>

					<li><a href="http://localhost:8082/FINALPROJECT2/user/individual_attendance_details.php">Daily Report</a></li>


					<li><a href="logout.php">Logout</a></li>
				</ul>

				<ul id="nav" class="navigation">

					<li id="notification_li" class="notification_li">
					<span id="notification_count"><?php if($count>0) { echo $count; } ?></span>

					<a style="padding: 14px 20px;;border-radius: 5px;
					background-color: #002240; color: white; margin-top:2px;
					font-size: 12px; font-family: sans-serif;font-weight:
					normal;display: inline;" onclick="myFunction()" href="#" id="notificationLink">Notifications</a>

					<div id="notificationContainer" style="width:350px" >
						<div id="notificationTitle" style="width:335px" >Notifications</div>
						<div id="notificationsBody" style="overflow: auto; width:335px;height:312px;">
						<div id="notification-latest"></div>
						</div>
						<div id="notificationFooter" style="width:335px">
							<a onclick="myFunction2()" href="">See All</a>	
						</div>

					</div>
					</li>	
				</ul>
				
			</div> <!-- header -->
