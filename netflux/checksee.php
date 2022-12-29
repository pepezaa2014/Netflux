<?php
include("connection.php");
session_start();
$sql1 = "SELECT * FROM `customer` WHERE `Id` = '".$_SESSION['user']."'";
$result = $conn->query($sql1);
$data = mysqli_fetch_array($result);
if ($result->num_rows == 1) {
	if ($data['Status'] == "เปิด") {
		header('location:seemovie.php');
	}
	else
		header('location:interfaceuser.php');
}
?>