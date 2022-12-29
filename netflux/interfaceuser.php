<!DOCTYPE html>
<html>
<head>
	<title>Interface</title>
	<?php
	include("connection.php");
	session_start();
	?>
	<link rel="stylesheet" type="text/css" href="box.css">
	<link rel="stylesheet" type="text/css" href="stylebuttext.css">
	<style>
		.btn-group .button {
			background-color: #A52A2A; /* Green */
			border: #A52A2A;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			cursor: pointer;
			float: center;
			font-family: Supermarket;
			transition: .2s;
			border-radius: 8px;
		}

		.btn-group .button:hover {
			background-color: #B22222;
		}
		.btn-group .buttona {
			background-color: #FF7F00; /* Green */
			border: #FF7F00;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			cursor: pointer;
			float: center;
			font-family: Supermarket;
			transition: .2s;
			border-radius: 8px;
		}

		.btn-group .buttona:hover {
			background-color: #CD6600;
		}
		.btn-group .buttonb {
			background-color: #FFC125; /* Green */
			border: #FFC125;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			cursor: pointer;
			float: center;
			font-family: Supermarket;
			transition: .2s;
			border-radius: 8px;
		}

		.btn-group .buttonb:hover {
			background-color: #CD9B1D;
		}
		.btn-group .buttonc {
			background-color: #FFAEB9; /* Green */
			border: #FFAEB9;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			cursor: pointer;
			float: center;
			font-family: Supermarket;
			transition: .2s;
			border-radius: 8px;
		}

		.btn-group .buttonc:hover {
			background-color: #CD8C95;
		}
		.btn-group .buttone {
			background-color: #FF4040; /* Green */
			border: #FF4040;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			cursor: pointer;
			float: center;
			font-family: Supermarket;
			transition: .2s;
			border-radius: 8px;
		}

		.btn-group .buttone:hover {
			background-color: #CD3333;
		}

		html {
			background: url(https://images.unsplash.com/photo-1533134486753-c833f0ed4866?ixlib=rb-1.2.1&w=1000&q=80) no-repeat center fixed;
			background-size: cover;
		}
	</style>
</head>
<body>
	<center><div class="box2">
		<font face="Printable4U" color="#FF7256" size="6"><h1>WELCOME</h1></font><br>
		<div class="btn-group">
			<a href="moviestable.php"><button class="button">ตารางหนัง</button></a>&nbsp;&nbsp;&nbsp;<a href="pay.php"><button class="buttona">โอนเงิน</button></a><br><br>
			<a href="checksee.php"><button class="buttonb">รับชมหนัง</button></a>&nbsp;&nbsp;&nbsp;<a href="checktic.php"><button class="buttonc">ตรวจสอบตั๋ว</button></a><br><br>
			<a href="des.php"><button class="buttone">ออกจากระบบ</button></a><br><br><br>
			<font face="Printable4U" size="5"><font color="#B0E2FF">สถานะ : </font>


			<?php
			$sql = "SELECT * FROM `customer` WHERE `Id` = '".$_SESSION['user']."' ";
			$result1 = $conn->query($sql);
			$data1 = mysqli_fetch_array($result1);

			if ($data1['Status']=="ปิด") {
				echo "<font color=\"red\">".$data1['Status'].""."</font>";
			}
			elseif ($data1['Status']=="รออนุมัติ") {
				echo "<font color=\"#FFC125\">".$data1['Status'].""."</font>";
			}
			else
				echo "<font color=\"#7FFFD4\">".$data1['Status'].""."</font>";
			?>
<br><br><font color="#FFE4E1">จำนวนเงินทั้งหมดที่ต้องจ่าย : <?php echo $data1['total'];?></font>
		</font>
	</div>
</div></center>
</body>
</html>