<?php
include("connection.php");
$new = "ปิด";
$new1 = "UPDATE `customer` SET `status`='".$new."' WHERE `status` = 'เปิด' ";
$sentm = $conn->query($new1);
header('location:interfaceadmin.php')
?>