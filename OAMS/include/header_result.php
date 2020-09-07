
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
$exam_session=$_GET['exam_session'];
?>

<html >

	<head>
		<title><?php echo $pagetitle; ?></title>
		<link rel="stylesheet" href="css/C.css" type="text/css">
	</head>


	<body>

		<div id="page">

			<div class="header">

				<img src="image/vu.jpg" alt="logo" width="350" height="104" align="left">

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
						</ul>
					</li>

					<li><a href=" ">Attendance <span >▼</span></a>

						<ul class="drop">
							<li><a href="pre_attendance_form.php">Do Attendance</a></li>
							<li><a href="attendance_details.php">see Attendance</a></li>
						</ul>

					</li>

					<li><a href=" ">Marking <span >▼</span></a>

						<ul class="drop">
							<li><a href="pre_marking_form.php">Do Marking</a></li>
							<li><a href="individual_marking.php">See Individual Marks</a></li>
							<li><a href="marking_details.php">See Overall Marks</a></li>	
						</ul>

					</li>

					<li><a href=" ">Result<span >▼</span></a>

						<ul class="drop">
							<li><a href="result_generate.php">Generate Result</a></li>
							<li><a href="include/result_first.php?exam_session=<?php echo $exam_session ?>">First Semester</a></li>
							<li><a href="result_second.php?exam_session=<?php echo $exam_session ?>">Second Semester</a></li>
							<li><a href="result_third.php?exam_session=<?php echo $exam_session ?>">Third Semester</a></li>
							<li><a href="published_result.php">View Result</a></li>
							<!-- <li><a href="result_fourth.php">Fourth Semester</a></li>
							<li><a href="result_fifth.php">Fifth Semester</a></li>
							<li><a href="result_sixth.php">Sixth Semester</a></li>
							<li><a href="result_seventh.php">Seventh Semester</a></li>
							<li><a href="result_eighth.php">Eighth Semester</a></li>
							<li><a href="result_nineth.php">Nineth Semester</a></li>
							<li><a href="result_tenth.php">Tenth Semester</a></li>
							<li><a href="result_eleventh.php">Eleventh Semester</a></li>
							<li><a href="result_twelveth.php">Twelveth Semester</a></li> -->
						</ul>

					</li>

					<li><a href="login_admin.php">Logout</a></li>
				</ul>
				
			</div> <!-- header -->
