<?php
$conn = new mysqli ('localhost', 'root', '', 'netflux');
if( $conn -> connect_errno){
	die("Connection Failed". $conn->connect_error);
}
$conn->query("set names utf8");
?>