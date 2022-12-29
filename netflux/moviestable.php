<!DOCTYPE html>
<html>
<head>
	<title>ตารางหนัง</title>
	<?php
	include("connection.php");
	session_start();
	?>
</head>
<body>
	<a href="interfaceuser.php">ย้อนกลับ</a><br><br>
	<font face="Printable4U" size="5">
		<?php
		$sql1 = "SELECT * FROM `movies` ORDER BY `time` asc ";
		$result = $conn->query($sql1);
		$path ='images/';
		echo "<table border='5' align='center' width='1550' height='600' color='black'>";
		echo "<tr align='center' bgcolor='#6E8898'><td>โปสเตอร์หนัง</td><td>ชื่อหนัง</td><td>เวลา</td><td>ราคา</td><td>เลือก</td>";
		while ($row = mysqli_fetch_array($result)) {
			echo "<tr align='center bgcolor='#D3D0CB'>"; 
			echo "<td align='center' bgcolor='#D3D0CB'>" . '<img src='.$path.$row['namepic'].' width="300" height="340">' .  "</td> "; 
			echo "<td align='center' bgcolor='#D3D0CB'>" .$row["name"] .  "</td> ";  
			echo "<td align='center' bgcolor='#D3D0CB'>" .$row["time"] .  "</td> ";
			echo "<td align='center' bgcolor='#D3D0CB'>" .$row["price"] .  "</td> ";
			echo "<td align='center' bgcolor='#D3D0CB'><a href='sentm.php?ID=$row[0]'>เลือก</a></td> ";
		}
		?>
	</font>
</body>
</html>