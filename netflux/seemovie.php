<!DOCTYPE html>
<html>
<head>
	<title>ดูหนัง NETFLUX</title>
	<?php
	include("connection.php");
	session_start();
	?>
	<style>
		html {
			background: url(https://images.pexels.com/photos/1831234/pexels-photo-1831234.jpeg?cs=srgb&dl=hd-1831234.jpg&fm=jpg) no-repeat center fixed;
			background-size: cover;
		}
	</style>
</head>
<body>
	<font face="Printable4U" color="white" size="5"><a href="interfaceuser.php">ย้อนกลับ</a></font>
	<?php
	$sql1 = "SELECT * FROM `movienow` WHERE `status` = 'เปิด' ";
	$result = $conn->query($sql1);
	$path ='video/';
	$data = mysqli_fetch_array($result);
	?>
	<center>
		<video controls="controls" autoplay="autoplay">
			<source  src="<?php echo $path.$data['video']; ?>" width="1000" height="1000">
			</video>
		</center>
	</body>
	</html>