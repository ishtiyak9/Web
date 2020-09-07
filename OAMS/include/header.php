
<!-- <!DOCTYPE html>
<html lang="en"> -->
<html >

	<head>
		<title><?php echo $pagetitle; ?></title>
		<link rel="stylesheet" href="http://localhost:8082/FINALPROJECT2/css/C.css" type="text/css">
	</head>


	<body>

		<div id="page">

			<div class="header">

				<img src="http://localhost:8082/FINALPROJECT2/image/vu.jpg" alt="logo" width="350" height="104" align="left">

				<ul class="nav">
				<br><br>
					<li style="margin-left:25%;border-left:0px solid #bbb"><a href="#">Home</a></li>
					<li><a href="student_details.php">Students</a></li>
					<li><a href="teacher_details.php">Teachers</a></li>
					<li><a href="subject_details.php">Subjects</a></li>
					<li><a href=" ">Report <span >▼</span></a>
						<ul class="drop">
							<li><a href="individual_report.php">Individual Report</a></li>
							<li><a href="overall_attendance_report.php">Overall Report</a></li>
							<!-- <li><a href="attendance_details.php">Overall report</a></li> -->
						</ul>
					</li>

					<li><a href=" ">Attendance <span >▼</span></a>

						<ul class="drop">
							<!-- <li><a href="pre_attendance_form.php">Do Attendance</a></li> -->
							<li><a href="attendance_details.php">See Attendance</a></li>
							<li><a href="attendance_details_individual_pre.php">See Individual Attendance</a></li>
							<li><a href="pre_attendance_details_by_date.php">See Attendance by date</a></li>
						</ul>

					</li>

					
					<li><a href="logout_admin.php">Logout</a></li>
				</ul>
				
			</div> <!-- header -->
