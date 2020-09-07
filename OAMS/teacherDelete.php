<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";


$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (isset($_GET['id'])) {
	
	$sql = "DELETE FROM teacher WHERE teacher_name = '$_GET[id]'";

	if (mysqli_query($conn, $sql)) {

     header("location:http://localhost:8082/FINALPROJECT2/teacher_details.php");
	} else {
    echo "Error deleting record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
}

?>