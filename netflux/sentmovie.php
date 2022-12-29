<?php
session_start();
include("connection.php");
echo $_REQUEST['ID'];

$sql1 = "SELECT * FROM `movienow` WHERE `name` = '".$_REQUEST['ID']."' ";
$result = $conn->query($sql1);
$data = mysqli_fetch_array($result);

if ($result->num_rows == 1) {


	$new = "ปิด";
	$new1 = "UPDATE `movienow` SET `status`='".$new."' WHERE `name` != '".$_REQUEST['ID']."' ";
	$sentm = $conn->query($new1);

	$neww = "เปิด";
	$neww1 = "UPDATE `movienow` SET `status`='".$neww."' WHERE `name` = '".$_REQUEST['ID']."' ";
	$sentmw = $conn->query($neww1);


	header('location:interfaceadmin.php');
}
else
	echo "string";
?>