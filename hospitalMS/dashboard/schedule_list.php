<?php include 'app/temp/1_head.php'; ?>

	<div class="main-content">
		
		<?php  include 'app/temp/2_sidebar.php'; ?>
		<?php  include 'app/temp/3_header.php'; ?>
<?php
	if (isset($_GET['del_sdule_id'])) {
		$sdule_id = $_GET['del_sdule_id'];
		$del_schedule_byId = $sdule->deleteScheduleInfoById($sdule_id);
	}
?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1 text-center" style="color:orange;">SCHEDULE</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4 style="color:orange;">Schedule list</h4>
						</div>
					</div>
				</div>
			</div>


			<div class="tables">
	
				<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
					<table class="table"> 
						<?php
							if (isset($del_schedule_byId)) {
								echo $del_schedule_byId;
							}
						?>
						<thead> 
							<tr> 
								<th width="5%">#</th> 
								<th width="10%">Doctor Name</th> 
								<th width="10%">Department</th> 
								<th width="10%">Day</th>  
								<th width="15%">Start time</th> 
								<th width="10%">End time</th> 
								<th width="10%">Status</th> 
								<th width="10%" class="text-center">Edit</th> 
								<th width="10%" class="text-center">Delete</th> 
							</tr> 
						</thead> 
						<tbody>
<?php
	$read_schedule_info = $sdule->readScheduleInfo();
	if ($read_schedule_info != false) {
		$i = 1;
		while ($read_schedule_info_data = $read_schedule_info->fetch_assoc()) {
?>

							<tr class="active"> 
								<td><?php echo $i; ?></td> 
								<td><?php echo $read_schedule_info_data['firstname']." ".$read_schedule_info_data['lastname']; ?></td>
								<td><?php echo $read_schedule_info_data['name']; ?></td>
								<td><?php echo $read_schedule_info_data['available_days']; ?></td>
<?php
	$st=strtotime($read_schedule_info_data['start_time']);
?>
								<td><?php echo date("h:ia", $st); ?></td>
<?php
	$et=strtotime($read_schedule_info_data['end_time']);
?>
								<td><?php echo  date("h:ia", $et); ?></td>
						
								<?php
									if ($read_schedule_info_data['status'] == 1) {
										echo "<td style='color:green;'>Active</td>";
									}else{
										echo "<td style='color:red;'>Inactive</td>";
									}
								?>
								<td class="text-center"><a onclick="return confirm('want to edit?');" href="schedule_edit.php?edit_sdule_id=<?php echo $read_schedule_info_data['schedule_id']; ?>" style="color: orange;"><i class="fa fa-pencil"></i></a></td>  
								<td class="text-center"><a onclick="return confirm('want to delete?');" href="?del_sdule_id=<?php echo $read_schedule_info_data['schedule_id']; ?>" style="color: red;"><i class="fa fa-times-circle"></i></a></td> 
							</tr>
<?php
			$i++;
		}
	}else{
?>
							<tr>
								<td colspan='9' style='text-align: center; color: red;'>Couldn't fetch Information from database</td>
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