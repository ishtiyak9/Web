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
						<div class="form-title" style="overflow:hidden;">
							<h4 style="float:left;">Edit Schedule Information:</h4>
							<h4 style="float:right"><a href="schedule_list.php">Back</a></h4>
						</div>
						<div class="form-body">
<?php
	if (isset($_GET['edit_sdule_id'])) {
		$schedule_id = $_GET['edit_sdule_id'];
	}
?>
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit_sdule_record'])) {
		$sdule_record = $sdule->updateScheduleRecord($_POST, $schedule_id);
	}
	if (isset($sdule_record)) {
		echo $sdule_record;
	}
?>
<?php
	$read_sdule_infoById = $sdule->readScheduleInformationByid($schedule_id);
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

										<option value="<?php echo $doc_list_data['user_id']; ?>" <?php if (isset($read_sdule_infoById)) { if ($read_sdule_infoById['doctor_id'] == $doc_list_data['user_id']) {echo 'selected'; }} ?> ><?php echo $doc_list_data['firstname']." ".$doc_list_data['lastname']; ?></option>
<?php
			}
		}	
?>
									</select>
								</div>

								<div class="form-group"> 
									<label for="2">Available Days</label> 
									<select name="available_days" id="2" class="form-control">
										<option value="Saturday" <?php if (isset($read_sdule_infoById)) { if ($read_sdule_infoById['available_days'] == 'Saturday') {echo 'selected'; }} ?> >Saturday</option>
										<option value="Sunday" <?php if (isset($read_sdule_infoById)) { if ($read_sdule_infoById['available_days'] == 'Sunday') {echo 'selected'; }} ?> >Sunday</option>
										<option value="Monday" <?php if (isset($read_sdule_infoById)) { if ($read_sdule_infoById['available_days'] == 'Monday') {echo 'selected'; }} ?> >Monday</option>
										<option value="Tuesday" <?php if (isset($read_sdule_infoById)) { if ($read_sdule_infoById['available_days'] == 'Tuesday') {echo 'selected'; }} ?> >Tuesday</option>
										<option value="Wednesday" <?php if (isset($read_sdule_infoById)) { if ($read_sdule_infoById['available_days'] == 'Wednesday') {echo 'selected'; }} ?> >Wednesday</option>
										<option value="Thursday" <?php if (isset($read_sdule_infoById)) { if ($read_sdule_infoById['available_days'] == 'Thursday') {echo 'selected'; }} ?> >Thursday</option>
										<option value="Friday" <?php if (isset($read_sdule_infoById)) { if ($read_sdule_infoById['available_days'] == 'Friday') {echo 'selected'; }} ?> >Friday</option>
									</select>
								</div>
								
								<div class="form-group"> 
									<label for="3">Start time: h:m:am/pm</label> 
									<input type="time" name="start_time" value="<?php if (isset($read_sdule_infoById)) {echo $read_sdule_infoById['start_time']; } ?>" class="form-control" id="3" > 
								</div>

								<div class="form-group"> 
									<label for="4">End time: h:m:am/pm</label> 
									<input type="time" name="end_time" value="<?php if (isset($read_sdule_infoById)) {echo $read_sdule_infoById['end_time']; } ?>" class="form-control" id="4" > 
								</div> 

								<div class="form-group"> 
									<label for="5" style="margin-right: 50px;">Status : </label> 
									<input type="radio" name="status" value="1" <?php if (isset($read_sdule_infoById)) { if ($read_sdule_infoById['status'] == 1) {echo 'checked'; }} ?> id="5" style="margin-left: 10px;" checked> Active
									<input type="radio" name="status" value="2" <?php if (isset($read_sdule_infoById)) { if ($read_sdule_infoById['status'] == 2) {echo 'checked'; }} ?> id="5" style="margin-left: 10px;"> Inactive
								</div> 
								<button type="submit" name="edit_sdule_record" class="btn btn-default pull-right" style="margin-bottom: 50px;"><i class="fa fa-plus"></i> save record</button> 
							</form> 


						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include 'app/temp/5_footer.php'; ?>

	</div>


<?php include 'app/temp/6_foot.php'; ?>