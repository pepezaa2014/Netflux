<!DOCTYPE html>
<html>
<head>
	<title>ตรวจตั๋ว</title>
	<?php
	include("connection.php");
	session_start();
	?>
</head>
<body>
	<a href="interfaceuser.php">ย้อนกลับ</a><br><br>
	<font face="Printable4U" size="5">
		<?php

		$sql1 = "SELECT * FROM `customer` WHERE  `Id` = '".$_SESSION['user']."'";
		$result = $conn->query($sql1);
		$path ='images/';
		echo "<table border='5' align='center' width='1550' height='300' color='black'>";
		echo "<tr align='center' bgcolor='#6E8898'><td>Thor Ragnarok</td><td>Captain Marvel</td><td>Captain America Civil War</td><td>Avenger Infinity War</td><td>Avenger End Game</td>";
		while ($row = mysqli_fetch_array($result)) {
			echo "<tr align='center bgcolor='#D3D0CB'>"; 
			echo "<td align='center' bgcolor='#D3D0CB'>" .$row["tic1"] .  "</td> ";  
			echo "<td align='center' bgcolor='#D3D0CB'>" .$row["tic2"] .  "</td> ";
			echo "<td align='center' bgcolor='#D3D0CB'>" .$row["tic3"] .  "</td> ";
			echo "<td align='center' bgcolor='#D3D0CB'>" .$row["tic4"] .  "</td> ";
			echo "<td align='center' bgcolor='#D3D0CB'>" .$row["tic5"] .  "</td> ";
		}
		?>
	</font>
</body>
</html>