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
						<div class="form-title">
							<h4 style="color:#e94e02;">Add New Patient :</h4>
						</div>
						<div class="form-body">
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_patient_record'])) {
		$patient_record = $patient->insertPatientRecord($_POST);
	}
	if (isset($patient_record)) {
		echo $patient_record;
	}
?>

							<form action="" method="post" enctype="multipart/form-data" style="min-height: 20vh;"> 
								<div class="form-group"> 
									<label for="1">Patient Name</label> 
									<input type="text" name="firstname" class="form-control" id="1" placeholder="Enter Patient Name"> 
								</div> 
								<!-- <div class="form-group"> 
									<label for="2">Last Name</label> 
									<input type="text" name="lastname" class="form-control" id="2" placeholder="Last Name"> 
								</div>  -->


								<div class="form-group"> 
									<label for="6">Mobile</label> 
									<input type="text" name="mobile" class="form-control" id="6" placeholder="Enter mobile number"> 
								</div>  

								<div class="form-group"> 
									<label for="7">Address</label> 
									<textarea name="address" id=7" class="form-control" cols="30" rows="7"></textarea>
								</div>
								
								<div class="form-group"> 
									<label for="11">Date of Birth</label> 
									<input type="date" name="date_of_birth" class="form-control" id="11" > 
								</div> 

								<div class="form-group"> 
									<label for="12" style="margin-right: 50px;">Sex : </label> 
									<input type="radio" name="sex" value="Male" id="12" style="margin-left: 10px;" checked> Male
									<input type="radio" name="sex" value="Female" id="12" style="margin-left: 10px;"> Female
								</div> 

								<div class="form-group"> 
									<label for="13">Blood group</label> 
									<select name="blood_group" id="13" class="form-control">
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
									</select>
								</div>

								<!-- <div class="form-group"> 
									<label for="14" style="margin-right: 50px;">Status : </label> 
									<input type="radio" name="status" value="1" id="14" style="margin-left: 10px;" checked> Active
									<input type="radio" name="status" value="2" id="14" style="margin-left: 10px;"> Inactive
								</div>  -->

								<button type="submit" name="add_patient_record" class="btn btn-default pull-right" style="margin-bottom: 50px;"><i class="fa fa-plus"></i> Add record</button> 
							</form> 


						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include 'app/temp/5_footer.php'; ?>

	</div>


<?php include 'app/temp/6_foot.php'; ?>