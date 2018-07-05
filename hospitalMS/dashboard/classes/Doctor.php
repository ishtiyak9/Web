<?php
	$path = realpath(dirname(__FILE__));
	include_once $path.'\..\lib\Database.php';
?>
<?php
	class Doctor{
		private $db;
		public function __construct(){
			$this->db = new Database();
		}

		public function readDeptList(){
			$query = "SELECT * FROM department";
			$read_query = $this->db->select($query);
			if ($read_query != false) {
				return $read_query;
			}else{
				return false;
			}
		}

		public function insertDoctorRecord($data){
			$firstname = mysqli_real_escape_string($this->db->link, $data['firstname']);
			/*$lastname = mysqli_real_escape_string($this->db->link, $data['lastname']);*/
			/*$email = mysqli_real_escape_string($this->db->link, $data['email']);*/
			$designation = mysqli_real_escape_string($this->db->link, $data['designation']);
			$department_id = mysqli_real_escape_string($this->db->link, $data['department_id']);
			/*$mobile = mysqli_real_escape_string($this->db->link, $data['mobile']);*/
			/*$address = mysqli_real_escape_string($this->db->link, $data['address']);*/
			$specialist = mysqli_real_escape_string($this->db->link, $data['specialist']);
			/*$date_of_birth = mysqli_real_escape_string($this->db->link, $data['date_of_birth']);*/
			$sex = mysqli_real_escape_string($this->db->link, $data['sex']);
			$blood_group = mysqli_real_escape_string($this->db->link, $data['blood_group']);
			/*$status = mysqli_real_escape_string($this->db->link, $data['status']);*/

			if (empty($firstname) || empty($designation) || empty($department_id) || empty($specialist) || empty($sex) || empty($blood_group) ) {
				$notice = "<div style='color:red; font-size:14px; text-align:center;'>Please filled all fields</div>";
				return $notice;
			}else{
				$query = "INSERT INTO user (firstname, designation, department_id, specialist, sex, blood_group, user_role) VALUES ('$firstname', '$designation', '$department_id', '$specialist', '$sex', '$blood_group', 2)";
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

		public function readDoctorInfo(){
			$query = "SELECT user.*, department.name FROM user INNER JOIN department WHERE user.department_id=department.dept_id";
			$read_query = $this->db->select($query);
			if ($read_query != false) {
				return $read_query;
			}else{
				return false;
			}
		}

		public function deleteDoctorInfoById($doc_id){
			$query = "DELETE FROM user WHERE user_id='$doc_id'";
			$del_query = $this->db->delete($query);
			if ($del_query != false) {
				$msg = "<div style='color:green; font-size:14px; text-align:center;'>Information deleted successfully</div>";
				return $msg;
			}else{
				$msg = "<div style='color:red; font-size:14px; text-align:center;'>Information couldn't be deleted</div>";
				return $msg;
			}
		}

		public function updateDoctorRecord($data, $doc_id){

			$firstname = mysqli_real_escape_string($this->db->link, $data['firstname']);
			/*$lastname = mysqli_real_escape_string($this->db->link, $data['lastname']);*/
			/*$email = mysqli_real_escape_string($this->db->link, $data['email']);*/
			$designation = mysqli_real_escape_string($this->db->link, $data['designation']);
			$department_id = mysqli_real_escape_string($this->db->link, $data['department_id']);
			/*$mobile = mysqli_real_escape_string($this->db->link, $data['mobile']);
			$address = mysqli_real_escape_string($this->db->link, $data['address']);*/
			$specialist = mysqli_real_escape_string($this->db->link, $data['specialist']);
			/*$date_of_birth = mysqli_real_escape_string($this->db->link, $data['date_of_birth']);*/
			$sex = mysqli_real_escape_string($this->db->link, $data['sex']);
			$blood_group = mysqli_real_escape_string($this->db->link, $data['blood_group']);
			/*$status = mysqli_real_escape_string($this->db->link, $data['status']);*/

			if (empty($firstname) || empty($designation) || empty($department_id) || empty($specialist) || empty($sex) || empty($blood_group) ) {
				$notice = "<div style='color:red; font-size:14px; text-align:center;'>Please filled all fields</div>";
				return $notice;
			}else{
				$query = "UPDATE user
						  SET
						  firstname = '$firstname',
						  designation = '$designation',
						  department_id = '$department_id',
						  specialist = '$specialist',
						  sex = '$sex',
						  blood_group = '$blood_group'
						  WHERE user_id = '$doc_id'";

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

		public function readDoctorInformationByid($doc_id){
			$query = "SELECT * FROM user WHERE user_id='$doc_id'";
			$read_query = $this->db->select($query);
			if ($read_query != false) {
				return $read_query->fetch_assoc();
			}else{
				return false;
			}
		}


	}
?>