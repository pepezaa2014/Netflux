<!DOCTYPE html>
<html>
<head>
	<title>Status</title>
	<?php
	include("connection.php");
	session_start();
	?>
</head>
<body>
	<a href="interfaceadmin.php">ย้อนกลับ</a><br><br>
	<font face="Printable4U" size="5">
		<?php
		$sql1 = "SELECT * FROM `customer` ORDER BY `Id` asc ";
		$result = $conn->query($sql1);
		echo "<table border='5' align='center' width='1550' height='600' color='black'>";
			echo "<tr align='center' bgcolor='#DAA520'><td>Id</td><td>Status</td><td>จำนวนเงินที่ต้องจ่าย</td><td>เปลี่ยนสถานะ</td>";
				while ($row = mysqli_fetch_array($result)) {
				echo "<tr align='center bgcolor='#FFEBCD'>"; 
					echo "<td align='center' bgcolor='#FFEBCD'>" .$row["Id"] .  "</td> ";  
					echo "<td align='center' bgcolor='#FFEBCD'>" .$row["Status"] .  "</td> ";
					echo "<td align='center' bgcolor='#FFEBCD'>" .$row["total"] .  "</td> ";
					echo "<td align='center' bgcolor='#FFEBCD'><a href='sentstatus.php?ID=$row[0]'>เลือก</a></td> ";
				}
				?>
			</font>
		</body>
		</html>