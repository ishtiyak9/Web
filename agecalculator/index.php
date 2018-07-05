<?php
date_default_timezone_set("Asia/Manila"); //timezone set
$now = date('F d, Y'); //get current date based from timezone set  //date('F j, Y  h:i:s a') --- Full Date
@$date = $_POST['dateinput']; // date input
if($_SERVER["REQUEST_METHOD"] == "POST" and !empty($date)){
		
	list($monthofdate, $dayofdate, $yearofdate) = explode(' ', $date); // divide date input into month, day, year
	list($monthofnow, $dayofnow, $yearofnow) = explode(' ', $now); // divide today's date into month, day, year

	// convert worded month into number
	$newmonthofdate = date('m', strtotime($monthofdate)); 
	$newmonthofnow = date('m', strtotime($monthofnow));
	$newdayofdate = substr($dayofdate,0,2);
	$newdayofnow = substr($dayofnow,0,2);

	$start_date = new DateTime($date);
	$since_start = $start_date->diff(new DateTime($now)); // compare date input from today's date
	$yearold = $since_start->y; // get year from output
	$monthold = $since_start->m;// get month from output
	$dayold = $since_start->d;// get day from output
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Age Calculator</title>
		<link rel="icon" href="img/favicon.ico" type="image/png">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/datepicker.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/datepicker.js"></script>
		<script src="js/script.js"></script>
	</head>
	<body onload="startTime()">
		<div class="container col-md-12 codebody">
			<?php
			$filecounter = "visitor.txt";
			$f = "visit.php";
			if(!file_exists($f)){
				touch($f);
				$handle =  fopen($f, "w" ) ;
				fwrite($handle,0) ;
				fclose ($handle);
			}
			
			$handle = fopen($f, "r");
			$counter = ( int ) fread ($handle,20) ;
			fclose ($handle) ;
			if(!isset($_POST["calcage"])){
				$counter++ ;
			}
			echo "<p class='visitor'>&nbsp&nbspThis page is visited <strong> ".  $counter . "</strong> times</p>";
			$handle =  fopen($f, "w" ) ;
			fwrite($handle,$counter) ;
			fclose ($handle) ;
			?>
			<nav class="navbar-inverse" role="navigation">
				<div id="clockdate">
					<div class="clockdate-wrapper">
						<div id="clock"></div>
						<div id="date"><?php echo date('l, F j, Y'); ?></div>
					</div>
				</div>
			</nav>
			<center><p class="title">Age Calculator</p></center>
			<form method = "post">
				<div class="form-group">
					<div class="input-group">
						<input type="text" readonly name="dateinput" class="datepicker-here form-control" placeholder="ex. August 03, 1998" data-language="en" value="<?php echo @$date;?>">
						<span class="input-group-btn">
							<button class="btn btn-success" type="submit" name="calcage">
								<span>Calculate Age</span>
							</button>
						</span>
					</div>
				</div>
			</form>
				<?php
				if($_SERVER["REQUEST_METHOD"] == "POST" and !empty($date)){
					//echo "<script>alert('test');</script>";
					//check if month and year is greater than or equal to current month and year
					if(($newmonthofdate == $newmonthofnow) and ($yearofdate == $yearofnow) and ($newdayofdate == $newdayofnow)){
						// Today
						echo "<div class='alert alert-info col-md-12'>";
						echo "<center>You are <strong>born today ";
					}elseif(($yearofdate > $yearofnow) or (($newmonthofdate == $newmonthofnow) and ($yearofdate == $yearofnow) and ($newdayofdate > $newdayofnow))){
						// Future
						echo "<div class='alert alert-warning col-md-12'>";
						echo "<center>Looks like your not yet born because you are <br><strong>";
						//if year is not equal to zero, put negative(-) sign before number
						if($yearold != 0){echo "-".$yearold." year".($yearold > 1 ? 's' : '').", ";}else{echo $yearold." year, ";}
						//if month is not equal to zero, put negative(-) sign before number
						if($monthold != 0){echo "-".$monthold." month".($monthold > 1 ?  's' : '').", ";}else{echo $monthold." month, ";}
						//if day is not equal to zero, put negative(-) sign before number
						if($dayold != 0){echo "-".$dayold." day".($dayold > 1 ? 's' : '')." old";}else{echo $dayold." day old";}
					}else{
						// Past
						echo "<div class='alert alert-success col-md-12'>";
						echo "<center>You are <strong>";
						// convert year to years if year value is greater than 1
						echo $yearold." year".($yearold > 1 ? 's' : '').", ";
						// convert month to months if month value is greater than 1
						echo $monthold." month".($monthold > 1 ? 's' : '').", ";
						// convert day to days if day value is greater than 1
						echo $dayold." day".($dayold > 1 ? 's' : '')." old";
					}
				}else{
					echo "<div class='alert alert-danger col-md-12'>";
					echo "<center><strong>Please Select Your Birthday";
				}
				?>
				</strong>
				</center>
			</div>
		</div>
		<br><br><br>
	</body>
</html>