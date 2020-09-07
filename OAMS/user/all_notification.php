<?php
$conn = new mysqli("localhost","root","","sis");

//seeing notification make status=1
// $sql="UPDATE notification SET status=1 WHERE status=0";	
// $result=mysqli_query($conn, $sql);

$sql="select * from notification ORDER BY id DESC ";
$result=mysqli_query($conn, $sql);

$response='';
while($row=mysqli_fetch_array($result)) {
	// $response = $response . "<div class='notification-item'>" .
	// "<div class='notification-subject'>". $row["subject"] . "</div>" . 
	// "<div class='notification-comment'>" . $row["comment"]  . "</div>" .
	// "</div>";

	// $response = $response . "<div class='notification-item'>" .
	// "<div class='notification-comment'>" . $row["comment"]  . "</div>" .
	// "</div>";
	 $p="<div class='notification-item'>" ."<div class='notification-comment'>" . $row["comment"]  . "</div>" ."</div>";

	 echo $p;



}
// if(!empty($response)) {
// 	print $response;
// }


?>