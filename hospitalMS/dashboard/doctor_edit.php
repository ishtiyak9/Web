<?php include 'app/temp/1_head.php'; ?>

	<div class="main-content">
		
		<?php include 'app/temp/2_sidebar.php'; ?>
		<?php include 'app/temp/3_header.php'; ?>
		
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1 text-center">DOCTOR</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title" style="overflow:hidden;">
							<h4 style="float:left;">Edit Doctor Information:</h4>
							<h4 style="float:right;"><a href="doctor_list.php">Back</a></h4>
						</div>
						<div class="form-body">
<?php
	if (isset($_GET['edit_doc_id'])) {
		$doc_id = $_GET['edit_doc_id'];
	}
?>
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit_doc_record'])) {
		$doc_record = $doc->updateDoctorRecord($_POST, $doc_id);
	}
	if (isset($doc_record)) {
		echo $doc_record;
	}
?>
<?php
	$read_doc_infoById = $doc->readDoctorInformationByid($doc_id);
?>


							<form action="" method="post" enctype="multipart/form-data" style="min-height: 20vh;"> 
								<div class="form-group"> 
									<label for="1">Doctor Name</label> 
									<input type="text" name="firstname" value="<?php if (isset($read_doc_infoById)) {echo $read_doc_infoById['firstname']; } ?>" class="form-control" id="1" placeholder="First Name"> 
								</div> 
								<!-- <div class="form-group"> 
									<label for="2">Last Name</label> 
									<input type="text" name="lastname" value="<?php if (isset($read_doc_infoById)) {echo $read_doc_infoById['lastname']; } ?>" class="form-control" id="2" placeholder="Last Name"> 
								</div>  -->


								<!-- <div class="form-group"> 
									<label for="3">Email</label> 
									<input type="email" name="email" value="<?php if (isset($read_doc_infoById)) {echo $read_doc_infoById['email']; } ?>" class="form-control" id="3" placeholder="Enter email"> 
								</div>  -->


								<div class="form-group"> 
									<label for="4">Designation</label> 
									<input type="text" name="designation" value="<?php if (isset($read_doc_infoById)) {echo $read_doc_infoById['designation']; } ?>" class="form-control" id="4" placeholder="Doctor designation"> 
								</div> 


								<div class="form-group"> 
									<label for="5">Department</label> 
									<select name="department_id" id="5" class="form-control">
<?php
	$dept_list = $doc->readDeptList();
	if ($dept_list) {
			while ($dept_list_data = $dept_list->fetch_assoc()) {
?>

										<option value="<?php echo $dept_list_data['dept_id']; ?>" <?php if (isset($read_doc_infoById)) { if ($read_doc_infoById['department_id'] == $dept_list_data['dept_id']) {echo 'selected'; }} ?> ><?php echo $dept_list_data['name']; ?></option>
<?php
			}
		}	
?>
									</select>
								</div>

								<!-- <div class="form-group"> 
									<label for="6">Mobile</label> 
									<input type="text" name="mobile" value="<?php if (isset($read_doc_infoById)) {echo $read_doc_infoById['mobile']; } ?>" class="form-control" id="6" placeholder="Enter mobile number"> 
								</div>  -->


								<!-- <div class="form-group"> 
									<label for="7">Address</label> 
									<textarea name="address" id=7" class="form-control" cols="30" rows="7"><?php if (isset($read_doc_infoById)) {echo $read_doc_infoById['address']; } ?></textarea>
								</div> -->

								<!-- <div class="form-group"> 
									<label for="8">Short Biography</label> 
									<textarea name="short_biography" id=8" class="form-control" cols="30" rows="8"></textarea>
								</div> -->

								<!-- <div class="form-group"> 
									<label for="9">Picture</label> 
									<input type="file" name="picture" class="form-control" id="9"> 
								</div> -->

								<div class="form-group"> 
									<label for="10">Specialist</label> 
									<input type="text" name="specialist" value="<?php if (isset($read_doc_infoById)) {echo $read_doc_infoById['specialist']; } ?>" class="form-control" id="10" placeholder="Specialist"> 
								</div>    

								<!-- <div class="form-group"> 
									<label for="11">Date of Birth</label> 
									<input type="date" name="date_of_birth" value="<?php if (isset($read_doc_infoById)) {echo $read_doc_infoById['date_of_birth']; } ?>" class="form-control" id="11" > 
								</div>  -->

								<div class="form-group"> 
									<label for="12" style="margin-right: 50px;">Sex : </label> 
									<input type="radio" name="sex" value="Male" id="12" <?php if (isset($read_doc_infoById)) { if ($read_doc_infoById['sex'] == 'Male') {echo 'checked'; }} ?> style="margin-left: 10px;"> Male
									<input type="radio" name="sex" value="Female" id="12" <?php if (isset($read_doc_infoById)) { if ($read_doc_infoById['sex'] == 'Female') {echo 'checked'; }} ?> style="margin-left: 10px;"> Female
								</div> 

								<div class="form-group"> 
									<label for="13">Blood group</label> 
									<select name="blood_group" id="13" class="form-control">
										<option value="A+" <?php if (isset($read_doc_infoById)) { if ($read_doc_infoById['blood_group'] == 'A+') {echo 'selected'; }} ?> >A+</option>
										<option value="A-" <?php if (isset($read_doc_infoById)) { if ($read_doc_infoById['blood_group'] == 'A-') {echo 'selected'; }} ?> >A-</option>
										<option value="B+" <?php if (isset($read_doc_infoById)) { if ($read_doc_infoById['blood_group'] == 'B+') {echo 'selected'; }} ?> >B+</option>
										<option value="B-" <?php if (isset($read_doc_infoById)) { if ($read_doc_infoById['blood_group'] == 'B-') {echo 'selected'; }} ?> >B-</option>
										<option value="O+" <?php if (isset($read_doc_infoById)) { if ($read_doc_infoById['blood_group'] == 'O+') {echo 'selected'; }} ?> >O+</option>
										<option value="O-" <?php if (isset($read_doc_infoById)) { if ($read_doc_infoById['blood_group'] == 'O-') {echo 'selected'; }} ?> >O-</option>
										<option value="AB+" <?php if (isset($read_doc_infoById)) { if ($read_doc_infoById['blood_group'] == 'AB+') {echo 'selected'; }} ?> >AB+</option>
										<option value="AB-" <?php if (isset($read_doc_infoById)) { if ($read_doc_infoById['blood_group'] == 'AB-') {echo 'selected'; }} ?> >AB-</option>
									</select>
								</div>

								<!-- <div class="form-group"> 
									<label for="14" style="margin-right: 50px;">Status : </label> 
									<input type="radio" name="status" value="1" <?php if (isset($read_doc_infoById)) { if ($read_doc_infoById['status'] == 1) {echo 'checked'; }} ?> id="14" style="margin-left: 10px;" > Active
									<input type="radio" name="status" value="2" <?php if (isset($read_doc_infoById)) { if ($read_doc_infoById['status'] == 2) {echo 'checked'; }} ?> id="14" style="margin-left: 10px;"> Inactive
								</div> -->

								<button type="submit" name="edit_doc_record" class="btn btn-default pull-right" style="margin-bottom: 50px;"><i class="fa fa-plus"></i> save record</button> 
							</form> 


						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include 'app/temp/5_footer.php'; ?>

	</div>


<?php include 'app/temp/6_foot.php'; ?>