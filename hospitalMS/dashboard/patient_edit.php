<?php include 'app/temp/1_head.php'; ?>

	<div class="main-content">
		
		<?php include 'app/temp/2_sidebar.php'; ?>
		<?php include 'app/temp/3_header.php'; ?>
		
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1 text-center">PATIENT</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title" style="overflow:hidden;">
							<h4 style="float:left;">Edit Patient Information:</h4>
							<h4 style="float:right;"><a href="patient_list.php">Back</a></h4>
						</div>
						<div class="form-body">
<?php
	if (isset($_GET['edit_pat_id'])) {
		$pat_id = $_GET['edit_pat_id'];
	}
?>
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit_pat_record'])) {
		$pat_record = $patient->updatePatientRecord($_POST, $pat_id);
	}
	if (isset($pat_record)) {
		echo $pat_record;
	}
?>
<?php
	$read_pat_infoById = $patient->readPatientInformationByid($pat_id);
?>


							<form action="" method="post" enctype="multipart/form-data" style="min-height: 20vh;"> 
								<div class="form-group"> 
									<label for="1">Patient Name</label> 
									<input type="text" name="firstname" value="<?php if (isset($read_pat_infoById)) {echo $read_pat_infoById['firstname']; } ?>" class="form-control" id="1" placeholder="First Name"> 
								</div> 
								<!-- <div class="form-group"> 
									<label for="2">Last Name</label> 
									<input type="text" name="lastname" value="<?php if (isset($read_pat_infoById)) {echo $read_pat_infoById['lastname']; } ?>" class="form-control" id="2" placeholder="Last Name"> 
								</div>  -->

								<div class="form-group"> 
									<label for="6">Mobile</label> 
									<input type="text" name="mobile" value="<?php if (isset($read_pat_infoById)) {echo $read_pat_infoById['mobile']; } ?>" class="form-control" id="6" placeholder="Enter mobile number"> 
								</div>

								<div class="form-group"> 
									<label for="7">Address</label> 
									<textarea name="address" id=7" class="form-control" cols="30" rows="7"><?php if (isset($read_pat_infoById)) {echo $read_pat_infoById['address']; } ?></textarea>
								</div> 

								<!-- <div class="form-group"> 
									<label for="9">Picture</label> 
									<input type="file" name="picture" class="form-control" id="9"> 
								</div> -->
								<div class="form-group"> 
									<label for="11">Date of Birth</label> 
									<input type="date" name="date_of_birth" value="<?php if (isset($read_pat_infoById)) {echo $read_pat_infoById['date_of_birth']; } ?>" class="form-control" id="11" > 
								</div> 

								<div class="form-group"> 
									<label for="12" style="margin-right: 50px;">Sex : </label> 
									<input type="radio" name="sex" value="Male" id="12" <?php if (isset($read_pat_infoById)) { if ($read_pat_infoById['sex'] == 'Male') {echo 'checked'; }} ?> style="margin-left: 10px;"> Male
									<input type="radio" name="sex" value="Female" id="12" <?php if (isset($read_pat_infoById)) { if ($read_pat_infoById['sex'] == 'Female') {echo 'checked'; }} ?> style="margin-left: 10px;"> Female
								</div> 

								<div class="form-group"> 
									<label for="13">Blood group</label> 
									<select name="blood_group" id="13" class="form-control">
										<option value="A+" <?php if (isset($read_pat_infoById)) { if ($read_pat_infoById['blood_group'] == 'A+') {echo 'selected'; }} ?> >A+</option>
										<option value="A-" <?php if (isset($read_pat_infoById)) { if ($read_pat_infoById['blood_group'] == 'A-') {echo 'selected'; }} ?> >A-</option>
										<option value="B+" <?php if (isset($read_pat_infoById)) { if ($read_pat_infoById['blood_group'] == 'B+') {echo 'selected'; }} ?> >B+</option>
										<option value="B-" <?php if (isset($read_pat_infoById)) { if ($read_pat_infoById['blood_group'] == 'B-') {echo 'selected'; }} ?> >B-</option>
										<option value="O+" <?php if (isset($read_pat_infoById)) { if ($read_pat_infoById['blood_group'] == 'O+') {echo 'selected'; }} ?> >O+</option>
										<option value="O-" <?php if (isset($read_pat_infoById)) { if ($read_pat_infoById['blood_group'] == 'O-') {echo 'selected'; }} ?> >O-</option>
										<option value="AB+" <?php if (isset($read_pat_infoById)) { if ($read_pat_infoById['blood_group'] == 'AB+') {echo 'selected'; }} ?> >AB+</option>
										<option value="AB-" <?php if (isset($read_pat_infoById)) { if ($read_pat_infoById['blood_group'] == 'AB-') {echo 'selected'; }} ?> >AB-</option>
									</select>
								</div>

								<!-- <div class="form-group"> 
									<label for="14" style="margin-right: 50px;">Status : </label> 
									<input type="radio" name="status" value="1" <?php if (isset($read_pat_infoById)) { if ($read_pat_infoById['status'] == 1) {echo 'checked'; }} ?> id="14" style="margin-left: 10px;" > Active
									<input type="radio" name="status" value="2" <?php if (isset($read_pat_infoById)) { if ($read_pat_infoById['status'] == 2) {echo 'checked'; }} ?> id="14" style="margin-left: 10px;"> Inactive
								</div>
 -->
								<button type="submit" name="edit_pat_record" class="btn btn-default pull-right" style="margin-bottom: 50px;"><i class="fa fa-plus"></i> save record</button> 
							</form> 


						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include 'app/temp/5_footer.php'; ?>

	</div>


<?php include 'app/temp/6_foot.php'; ?>