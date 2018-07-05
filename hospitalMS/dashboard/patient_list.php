<?php include 'app/temp/1_head.php'; ?>

	<div class="main-content">
		
		<?php  include 'app/temp/2_sidebar.php'; ?>
		<?php  include 'app/temp/3_header.php'; ?>
<?php
	if (isset($_GET['del_pat_id'])) {
		$pat_id = $_GET['del_pat_id'];
		$del_patientInfo_byId = $patient->deletePatientInfoById($pat_id);
	}
?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1 text-center" style="color:orange;">PATIENT</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4 style="color:orange;">Patient list</h4>
						</div>
					</div>
				</div>
			</div>


			<div class="tables">
	
				<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
					<table class="table"> 
						<?php
							if (isset($del_patientInfo_byId)) {
								echo $del_patientInfo_byId;
							}
						?>
						<thead> 
							<tr> 
								<th width="10%">#</th> 
								<th width="20%">Name</th> 
								<th width="15%">Mobile</th>  
								<th width="15%">Age</th> 
								<th width="10%">Sex</th> 
								<th width="10%">Blood Group</th>
								<th width="10%" class="text-center">Edit</th> 
								<th width="10%" class="text-center">Delete</th> 
							</tr> 
						</thead> 
						<tbody>
<?php
	$read_pat_info = $patient->readPatientInfo();
	if ($read_pat_info != false) {
		$i = 1;
		while ($read_pat_info_data = $read_pat_info->fetch_assoc()) {
?>

							<tr class="active"> 
								<td><?php echo $i; ?></td> 
								<td><?php echo $read_pat_info_data['firstname']; ?></td>
								<td><?php echo $read_pat_info_data['mobile']; ?></td>
<?php
	$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
	$current_date = $dt->format('Y-m-d');
	$current_year = explode("-", $current_date);

	$patient_birth_date = $read_pat_info_data['date_of_birth'];
	$patient_birth_year = explode("-", $patient_birth_date);

	$patient_age = $current_year[0] - $patient_birth_year[0];
?>
							    <td><?php echo $patient_age; ?></td>
								<td><?php echo $read_pat_info_data['sex']; ?></td>
								<td><?php echo $read_pat_info_data['blood_group']; ?></td>
						
								<?php
									/*if ($read_pat_info_data['status'] == 1) {
										echo "<td style='color:green;'>Active</td>";
									}else{
										echo "<td style='color:red;'>Inactive</td>";
									}*/
								?>
								<td class="text-center"><a onclick="return confirm('want to edit?');" href="patient_edit.php?edit_pat_id=<?php echo $read_pat_info_data['id']; ?>" style="color: orange;"><i class="fa fa-pencil"></i></a></td>  
								<td class="text-center"><a onclick="return confirm('want to delete?');" href="?del_pat_id=<?php echo $read_pat_info_data['id']; ?>" style="color: red;"><i class="fa fa-times-circle"></i></a></td> 
							</tr>
<?php
			$i++;
		}
	}else{
?>
							<tr>
								<td colspan='8' style='text-align: center; color: red;'>Couldn't fetch Information from database</td>
							</tr>
<?php
	}
?>  
						</tbody> 
					</table> 
				</div>

			</div>
		</div>

		<?php include 'app/temp/5_footer.php'; ?>

	</div>


<?php include 'app/temp/6_foot.php'; ?>