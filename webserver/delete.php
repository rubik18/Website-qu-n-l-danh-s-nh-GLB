<?php 
// Kết nối
	require'connectSQL.php';
	$conn->set_charset("utf8");
	 session_start();
	
// Tạo mã SQL

	$id = (int)$_GET['id'];


	$sql = "DELETE FROM `model3d` WHERE `model3d`.`id` = $id";
	mysqli_query($conn,$sql) or die("Xóa dữ liệu thất bại !");
	header("Location: listFile.php");
 ?>