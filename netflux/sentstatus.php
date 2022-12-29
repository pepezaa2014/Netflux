<?php
session_start();
include("connection.php");
echo $_REQUEST['ID'];

$sql1 = "SELECT * FROM `customer` WHERE `Id` = '".$_REQUEST['ID']."' ";
$result = $conn->query($sql1);
$data = mysqli_fetch_array($result);

if ($result->num_rows == 1) {

	$newmoney1 = "UPDATE `customer` SET `total`='0' WHERE `Id` = '".$_REQUEST['ID']."'";
	$newmoney2 = "UPDATE `customer` SET `Status`='เปิด' WHERE `Id` = '".$_REQUEST['ID']."'";
	$sentm = $conn->query($newmoney1);
	$sentm1 = $conn->query($newmoney2);
	header('location:interfaceadmin.php');
}
?>