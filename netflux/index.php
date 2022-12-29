<!DOCTYPE html>
<html>
<head>
	<title>NETFLUX</title>
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
		html {
			background: url(https://images.unsplash.com/photo-1533134486753-c833f0ed4866?ixlib=rb-1.2.1&w=1000&q=80) no-repeat center fixed;
			background-size: cover;
		}
	</style>
</head>
<body>
	<center><div class="box2"><font face="Printable4U" size="6.5" color="red">
		<h1>NETFLUX</h1>
		<form action="checkuser.php" method="post"><font color="#CD5555" size="6">
			USERNAME<br><br><input type="text" name="user" class="textbox"><br><br>
			PASSWORD<br><br><input type="password" name="pass" class="textbox"><br><br>
			<div class="btn-group"><button class="button">ยืนยัน</button></div><br>
		</font></form>
		<font color="white"><a href="regis.php">สมัครสมาชิก</a></font>&nbsp;&nbsp;<font color="#FFDAB9"><a href="admin.php">Admin</a></font>
	</font></div></center>
</body>
</html>
