<!DOCTYPE html>
<html>
<head>
	<title>Interface Admin</title>
	<?php
	include("connection.php");
	session_start();
	?>
	<link rel="stylesheet" type="text/css" href="box.css">
	<link rel="stylesheet" type="text/css" href="stylebuttext.css">
	<style>
		.btn-group .button {
			background-color: #FFE4B5; /* Green */
			border: #FFE4B5;
			color: black;
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
			background-color: #FFDAB9;
		}
		.btn-group .buttona {
			background-color: #F0FFFF; /* Green */
			border: #F0FFFF;
			color: black;
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
			background-color: #F0FFF0;
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
			<a href="adminstatus.php"><button class="button">เปิดสถานะการใช้งาน</button></a>&nbsp;&nbsp;&nbsp;<a href="startwatch.php"><button class="buttona">เอาหนังลง</button></a><br><br>
			<a href="reset.php"><button class="buttona">ล้างค่า</button></a>&nbsp;&nbsp;&nbsp;
			<a href="des.php"><button class="buttone">ออกจากระบบ</button></a><br><br><br>

		</font>
	</div>
</div></center>
</body>
</html>