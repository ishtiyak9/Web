<?php
	$path = realpath(dirname(__FILE__));

	include_once $path.'\..\lib\Database.php';
	include_once $path.'\..\helpers\Format.php';
?>
<?php
	class Login{
		private $db;
		private $fm;
		public function __construct(){
			$this->db = new Database();
			$this->fm = new Format();
		}

		public function userLogin($data){
			$email = $this->fm->validation($data['email']);
			$email = mysqli_real_escape_string($this->db->link, $email);

			$password = $this->fm->validation($data['password']);
			$password = mysqli_real_escape_string($this->db->link, $password);

			$user_role = $this->fm->validation($data['user_role']);
			$user_role = mysqli_real_escape_string($this->db->link, $user_role);

			if (empty($email) || empty($password) || empty($user_role)) {
				$logInMsg = "<span style='color:red; font-size:14px;'>all fields mustn't be empty !";
				return $logInMsg;
			}else{
				$query = "SELECT * FROM user WHERE email = '$email' AND password = '$password' AND user_role ='$user_role'";
				$result = $this->db->select($query);

				if ($result != false) {
					$value = $result->fetch_assoc();

					Session::set("adminlogin", true);
					Session::set("user_id", $value['user_id']);
					Session::set("firstname", $value['firstname']);
					Session::set("lastname", $value['lastname']);
					Session::set("user_role", $value['user_role']);

					header("Location:dashboard/index.php");
				}else{
					$logInMsg = "<span style='color:red; font-size:14px;'>username or password not match !";
					return $logInMsg;
				}
			}
		}
		

	}
?>