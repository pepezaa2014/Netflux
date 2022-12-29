<?php
session_start();
include("connection.php");
echo $_REQUEST['ID'];

$sql1 = "SELECT * FROM `movies` WHERE `name` = '".$_REQUEST['ID']."' ";
$result = $conn->query($sql1);
$data = mysqli_fetch_array($result);

$sql = "SELECT * FROM `customer` WHERE `Id` = '".$_SESSION['user']."' ";
$result1 = $conn->query($sql);
$data1 = mysqli_fetch_array($result1);

if ($result->num_rows == 1) {

	$newmoney = $data1['total'] + $data['price'] ;
	$newmoney1 = "UPDATE `customer` SET `total`='".$newmoney."' WHERE `Id` = '".$_SESSION['user']."'";
	$sentm = $conn->query($newmoney1);

	if ($_REQUEST['ID']=="thor ragnarok") {
		$newtic = "จองแล้ว" ;
		$newtic1 = "UPDATE `customer` SET `tic1`='".$newtic."' WHERE `Id` = '".$_SESSION['user']."'";
		$senttic = $conn->query($newtic1);
	}
	elseif ($_REQUEST['ID']=="captain marvel") {
		$newtic = "จองแล้ว" ;
		$newtic1 = "UPDATE `customer` SET `tic2`='".$newtic."' WHERE `Id` = '".$_SESSION['user']."'";
		$senttic = $conn->query($newtic1);
	}
	elseif ($_REQUEST['ID']=="captain america civil war") {
		$newtic = "จองแล้ว" ;
		$newtic1 = "UPDATE `customer` SET `tic3`='".$newtic."' WHERE `Id` = '".$_SESSION['user']."'";
		$senttic = $conn->query($newtic1);
	}
	elseif ($_REQUEST['ID']=="avenger infinity war") {
		$newtic = "จองแล้ว" ;
		$newtic1 = "UPDATE `customer` SET `tic4`='".$newtic."' WHERE `Id` = '".$_SESSION['user']."'";
		$senttic = $conn->query($newtic1);
	}
	else{
		$newtic = "จองแล้ว" ;
		$newtic1 = "UPDATE `customer` SET `tic5`='".$newtic."' WHERE `Id` = '".$_SESSION['user']."'";
		$senttic = $conn->query($newtic1);
}

	header('location:interfaceuser.php');
}
else
	echo "string";
?>