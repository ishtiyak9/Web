<?php
	$path = realpath(dirname(__FILE__));
	include_once $path.'\..\lib\Database.php';
?>
<?php
	class Patient{
		private $db;
		public function __construct(){
			$this->db = new Database();
		}

		public function insertPatientRecord($data){
			$firstname = mysqli_real_escape_string($this->db->link, $data['firstname']);
			/*$lastname = mysqli_real_escape_string($this->db->link, $data['lastname']);*/
			$mobile = mysqli_real_escape_string($this->db->link, $data['mobile']);
			$address = mysqli_real_escape_string($this->db->link, $data['address']);
			$date_of_birth = mysqli_real_escape_string($this->db->link, $data['date_of_birth']);
			$sex = mysqli_real_escape_string($this->db->link, $data['sex']);
			$blood_group = mysqli_real_escape_string($this->db->link, $data['blood_group']);
			/*$status = mysqli_real_escape_string($this->db->link, $data['status']);*/

			if (empty($firstname) || empty($mobile) || empty($address) || empty($date_of_birth) || empty($sex) || empty($blood_group) ) {
				$notice = "<div style='color:red; font-size:14px; text-align:center;'>Please filled all fields</div>";
				return $notice;
			}else{
				$query = "INSERT INTO patient (firstname, mobile, address, date_of_birth, sex, blood_group) VALUES ('$firstname','$mobile', '$address', '$date_of_birth', '$sex', '$blood_group')";
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

		public function readPatientInfo(){
			$query = "SELECT * FROM patient";
			$read_query = $this->db->select($query);
			if ($read_query != false) {
				return $read_query;
			}else{
				return false;
			}
		}

		public function deletePatientInfoById($pat_id){
			$query = "DELETE FROM patient WHERE id='$pat_id'";
			$del_query = $this->db->delete($query);
			if ($del_query != false) {
				$msg = "<div style='color:green; font-size:14px; text-align:center;'>Information deleted successfully</div>";
				return $msg;
			}else{
				$msg = "<div style='color:red; font-size:14px; text-align:center;'>Information couldn't be deleted</div>";
				return $msg;
			}
		}

		public function readPatientInformationByid($pat_id){
			$query = "SELECT * FROM patient WHERE id='$pat_id'";
			$read_query = $this->db->select($query);
			if ($read_query != false) {
				return $read_query->fetch_assoc();
			}else{
				return false;
			}
		}

		public function updatePatientRecord($data, $pat_id){
			$firstname = mysqli_real_escape_string($this->db->link, $data['firstname']);
			/*$lastname = mysqli_real_escape_string($this->db->link, $data['lastname']);*/
			$mobile = mysqli_real_escape_string($this->db->link, $data['mobile']);
			$address = mysqli_real_escape_string($this->db->link, $data['address']);
			$date_of_birth = mysqli_real_escape_string($this->db->link, $data['date_of_birth']);
			$sex = mysqli_real_escape_string($this->db->link, $data['sex']);
			$blood_group = mysqli_real_escape_string($this->db->link, $data['blood_group']);
			/*$status = mysqli_real_escape_string($this->db->link, $data['status']);*/

			if (empty($firstname) || empty($mobile) || empty($address) || empty($date_of_birth) || empty($sex) || empty($blood_group) ) {
				$notice = "<div style='color:red; font-size:14px; text-align:center;'>Please filled all fields</div>";
				return $notice;
			}else{
				$query = "UPDATE patient
						  SET
						  firstname = '$firstname',
						  mobile = '$mobile',
						  address = '$address',
						  date_of_birth = '$date_of_birth',
						  sex = '$sex',
						  blood_group = '$blood_group'
						  WHERE id = '$pat_id'";

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