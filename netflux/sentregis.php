<?php
include("connection.php");
$user=$_POST['user'];
$pass=$_POST['pass'];

$sql = "SELECT * FROM `customer` WHERE `Id` = '".$user."' ";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
	header('location:index.php');
}
else {
$sql1 = "INSERT INTO `customer`(`Id`, `Pass`, `Status`) VALUES ('$user','$pass','ปิด')";
$result = $conn->query($sql1);
echo "string";
header('location:index.php');
}
?>

