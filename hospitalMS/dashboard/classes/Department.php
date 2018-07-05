<?php
	$path = realpath(dirname(__FILE__));
	include_once $path.'\..\lib\Database.php';
?>
<?php
	class Department{
		private $db;
		public function __construct(){
			$this->db = new Database();
		}

		public function insertDepartment($data){
			$name = mysqli_real_escape_string($this->db->link, $data['name']);
			$description = mysqli_real_escape_string($this->db->link, $data['description']);
			$status = mysqli_real_escape_string($this->db->link, $data['status']);

			if (empty($name) || empty($description) || empty($status)) {
				$msg = "<div style='color:red; font-size:14px; text-align:center;'>Please filled all fields</div>";
				return $msg;
			}else{
				$query = "INSERT INTO department (name, description, status) VALUES ('$name', '$description', '$status')";
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

		public function readDeptarmentInfo(){
			$query = "SELECT * FROM department";
			$read_query = $this->db->select($query);
			if ($read_query != false) {
				return $read_query;
			}else{
				return false;
			}
		}

		public function readDepartmentInfoById($dept_id){
			$query = "SELECT * FROM department WHERE dept_id='$dept_id'";
			$read_query = $this->db->select($query);
			if ($read_query != false) {
				return $read_query->fetch_assoc();
			}else{
				return false;
			}
			
		}

		public function deleteDepartmentInfoById($dept_id){
			$query = "DELETE FROM department WHERE dept_id='$dept_id'";
			$del_query = $this->db->delete($query);
			if ($del_query != false) {
				$msg = "<div style='color:green; font-size:14px; text-align:center;'>Information deleted successfully</div>";
				return $msg;
			}else{
				$msg = "<div style='color:red; font-size:14px; text-align:center;'>Information couldn't be deleted</div>";
				return $msg;
			}
		}

		public function updateDepartmentInfoById($data, $dept_id){

			$name = mysqli_real_escape_string($this->db->link, $data['name']);
			$description = mysqli_real_escape_string($this->db->link, $data['description']);
			$status = mysqli_real_escape_string($this->db->link, $data['status']);

			if (empty($name) || empty($description) || empty($status)) {
				$msg = "<div style='color:red; font-size:14px; text-align:center;'>Please filled all fields</div>";
				return $msg;
			}else{
				$query = "UPDATE department SET 
					  name='$name',
					  description='$description',
					  status='$status'
					  WHERE dept_id = '$dept_id'";
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