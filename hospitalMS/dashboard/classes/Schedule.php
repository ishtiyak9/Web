<?php
	$path = realpath(dirname(__FILE__));
	include_once $path.'\..\lib\Database.php';
?>
<?php
	class Schedule{
		private $db;
		public function __construct(){
			$this->db = new Database();
		}

		public function readDoctorList(){
			$query = "SELECT * FROM user WHERE user_role = 2";
			$read_query = $this->db->select($query);
			if ($read_query != false) {
				return $read_query;
			}else{
				return false;
			}
		}

		public function insertScheduleRecord($data){
			$doctor_id = mysqli_real_escape_string($this->db->link, $data['doctor_id']);
			$available_days = mysqli_real_escape_string($this->db->link, $data['available_days']);
			$start_time = mysqli_real_escape_string($this->db->link, $data['start_time']);
			$end_time = mysqli_real_escape_string($this->db->link, $data['end_time']);
			$status = mysqli_real_escape_string($this->db->link, $data['status']);

			if (empty($doctor_id) || empty($available_days) || empty($start_time) || empty($end_time) || empty($status)) {
				$notice = "<div style='color:red; font-size:14px; text-align:center;'>Please filled all fields</div>";
				return $notice;
			}else{
				$query = "INSERT INTO schedule (doctor_id, available_days, start_time, end_time, status) VALUES ('$doctor_id', '$available_days', '$start_time', '$end_time', '$status')";
				$insert_query = $this->db->insert($query);
				if ($insert_query != false) {
					$msg = "<div style='color:green; font-size:14px; text-align:center;'>Information added successfully</div>";
					return $msg;
				}else{
					$msg = "<div style='color:red; font-size:14px; text-align:center;'>Information added failed</div>";
					return $msg;
				}
			}
		}

		public function readScheduleInfo(){
			$query = "SELECT user.firstname, user.lastname, schedule.*, department.name FROM ((user INNER JOIN schedule ON user.user_id = schedule.doctor_id) INNER JOIN department ON user.department_id = department.dept_id) WHERE user.user_role=2";
			$read_query = $this->db->select($query);
			if ($read_query != false) {
				return $read_query;
			}else{
				return false;
			}
		}

		public function deleteScheduleInfoById($sdule_id){
			$query = "DELETE FROM schedule WHERE schedule_id='$sdule_id'";
			$del_query = $this->db->delete($query);
			if ($del_query != false) {
				$msg = "<div style='color:green; font-size:14px; text-align:center;'>Information deleted successfully</div>";
				return $msg;
			}else{
				$msg = "<div style='color:red; font-size:14px; text-align:center;'>Information couldn't be deleted</div>";
				return $msg;
			}
		}

		public function readScheduleInformationByid($schedule_id){
			$query = "SELECT * FROM schedule WHERE schedule_id='$schedule_id'";
			$read_query = $this->db->select($query);
			if ($read_query != false) {
				return $read_query->fetch_assoc();
			}else{
				return false;
			}
		}

		public function updateScheduleRecord($data, $schedule_id){
			$doctor_id = mysqli_real_escape_string($this->db->link, $data['doctor_id']);
			$available_days = mysqli_real_escape_string($this->db->link, $data['available_days']);
			$start_time = mysqli_real_escape_string($this->db->link, $data['start_time']);
			$end_time = mysqli_real_escape_string($this->db->link, $data['end_time']);
			$status = mysqli_real_escape_string($this->db->link, $data['status']);

			if (empty($doctor_id) || empty($available_days) || empty($start_time) || empty($end_time) || empty($status)) {
				$notice = "<div style='color:red; font-size:14px; text-align:center;'>Please filled all fields</div>";
				return $notice;
			}else{
				$query = "UPDATE schedule
						  SET
						  doctor_id = '$doctor_id',
						  available_days = '$available_days',
						  start_time = '$start_time',
						  end_time = '$end_time',
						  status = '$status'
						  WHERE schedule_id = '$schedule_id'";

				$update_query = $this->db->update($query);
				if ($update_query != false) {
					$msg = "<div style='color:green; font-size:14px; text-align:center;'>Information updated successfully</div>";
					return $msg;
				}else{
					$msg = "<div style='color:red; font-size:14px; text-align:center;'>Information updated failed</div>";
					return $msg;
				}
			}
		}

	}
?>