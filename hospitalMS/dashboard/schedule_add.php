<?php include 'app/temp/1_head.php'; ?>

	<div class="main-content">
		
		<?php include 'app/temp/2_sidebar.php'; ?>
		<?php include 'app/temp/3_header.php'; ?>
		
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1 text-center">SCHEDULE</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Add New Schedule :</h4>
						</div>
						<div class="form-body">
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_schedule'])) {
		$schedule_record = $sdule->insertScheduleRecord($_POST);
	}
	if (isset($schedule_record)) {
		echo $schedule_record;
	}
?>

							<form action="" method="post" enctype="multipart/form-data" style="min-height: 20vh;"> 
								
 								<div class="form-group"> 
									<label for="1">Doctor Name</label> 
									<select name="doctor_id" id="1" class="form-control">
<?php
	$doc_list = $sdule->readDoctorList();
	if ($doc_list) {
			while ($doc_list_data = $doc_list->fetch_assoc()) {
?>

										<option value="<?php echo $doc_list_data['user_id']; ?>"><?php echo $doc_list_data['firstname']." ".$doc_list_data['lastname']; ?></option>
<?php
			}
		}	
?>
									</select>
								</div>

								<div class="form-group"> 
									<label for="2">Available Days</label> 
									<select name="available_days" id="2" class="form-control">
										<option value="Saturday">Saturday</option>
										<option value="Sunday">Sunday</option>
										<option value="Monday">Monday</option>
										<option value="Tuesday">Tuesday</option>
										<option value="Wednesday">Wednesday</option>
										<option value="Thursday">Thursday</option>
										<option value="Friday">Friday</option>
									</select>
								</div>
								
								<div class="form-group"> 
									<label for="3">Start time: h:m:am/pm</label> 
									<input type="time" name="start_time" class="form-control" id="3" > 
								</div>

								<div class="form-group"> 
									<label for="4">End time: h:m:am/pm</label> 
									<input type="time" name="end_time" class="form-control" id="4" > 
								</div> 

								<div class="form-group"> 
									<label for="5" style="margin-right: 50px;">Status : </label> 
									<input type="radio" name="status" value="1" id="5" style="margin-left: 10px;" checked> Active
									<input type="radio" name="status" value="2" id="5" style="margin-left: 10px;"> Inactive
								</div> 

								<button type="submit" name="add_schedule" class="btn btn-default pull-right" style="margin-bottom: 50px;"><i class="fa fa-plus"></i> Add Schedule</button> 
							</form> 


						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include 'app/temp/5_footer.php'; ?>

	</div>


<?php include 'app/temp/6_foot.php'; ?>