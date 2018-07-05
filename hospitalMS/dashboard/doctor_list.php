<?php include 'app/temp/1_head.php'; ?>

	<div class="main-content">
		
		<?php  include 'app/temp/2_sidebar.php'; ?>
		<?php  include 'app/temp/3_header.php'; ?>
<?php
	if (isset($_GET['del_doc_id'])) {
		$doc_id = $_GET['del_doc_id'];
		$del_docInfo_byId = $doc->deleteDoctorInfoById($doc_id);
	}
?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1 text-center" style="color:orange;">DOCTOR</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4 style="color:orange;">doctor list</h4>
						</div>
					</div>
				</div>
			</div>


			<div class="tables">
	
				<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
					<table class="table"> 
						<?php
							if (isset($del_docInfo_byId)) {
								echo $del_docInfo_byId;
							}
						?>
						<thead> 
							<tr> 
								<th width="5%">#</th> 
								<th width="20%">Name</th> 
								<th width="15%">Department</th> 
								<th width="15%">Specialist</th> 
								<th width="10%">Sex</th> 
								<th width="15%">Blood group</th>
								<th width="10%" class="text-center">Edit</th> 
								<th width="10%" class="text-center">Delete</th> 
							</tr> 
						</thead> 
						<tbody>
							<?php
								$read_doc_info = $doc->readDoctorInfo();
								if ($read_doc_info != false) {
									$i = 1;
									while ($read_doc_info_data = $read_doc_info->fetch_assoc()) {
							?>

							<tr class="active"> 
								<td><?php echo $i; ?></td> 
								<td><?php echo $read_doc_info_data['firstname']; ?></td>
								<td><?php echo $read_doc_info_data['name']; ?></td>
								<td><?php echo $read_doc_info_data['specialist']; ?></td>
								<td><?php echo $read_doc_info_data['sex']; ?></td>
								<td><?php echo $read_doc_info_data['blood_group']; ?></td>
						
								<?php
									/*if ($read_doc_info_data['status'] == 1) {
										echo "<td style='color:green;'>Active</td>";
									}else{
										echo "<td style='color:red;'>Inactive</td>";
									}*/
								?>
								<td class="text-center">
									<a onclick="return confirm('want to edit?');" href="doctor_edit.php?edit_doc_id=<?php echo $read_doc_info_data['user_id']; ?>" style="color: orange;">
									<i class="fa fa-pencil"></i>
									</a>
								</td>  

								<td class="text-center">
									<a onclick="return confirm('want to delete?');" href="?del_doc_id=<?php echo $read_doc_info_data['user_id']; ?>" style="color: red;">
									<i class="fa fa-times-circle"></i>
									</a>
								</td> 
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