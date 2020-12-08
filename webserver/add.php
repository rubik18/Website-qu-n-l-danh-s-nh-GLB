<?php  
// Kết nối
session_start();
unset($_SESSION['glb']);
unset($_SESSION['img']);
require'connectSQL.php';
$conn->set_charset("utf8");

// uploadFile
// lấy tên của file:
  // echo "<pre>";
  // var_dump($_FILES);die();
  // echo "</pre>";
$file_glb=$_FILES['glb']["name"];
//lấy đường dẫn tạm lưu nội dung file:
$file_tmp =$_FILES['glb']['tmp_name'];
//tạo đường dẫn lưu file trên host:
$path ="upload/".$file_glb;
// var_dump($path);die();
$link ="/SEO4-Nhom14.2/webserver/upload/".$file_glb;

//upload nội dung file từ đường dẫn tạm vào đường dẫn vừa tạo:
move_uploaded_file($file_tmp,$path);
  if (isset($_FILES['glb'])&&$_FILES['glb']["name"]!=null) {
  	$glb = $link;
  }
  else{
  	$glb = $_POST['URL'];
//  	echo $_POST['URL'];
  }


$file_img=$_FILES['img']["name"];
//lấy đường dẫn tạm lưu nội dung file:
$file_tmpi =$_FILES['img']['tmp_name'];
//tạo đường dẫn lưu file trên host:
$pathimg ="upload/img/".$file_img;
// var_dump($path);die();
$linkimg ="/SEO4-Nhom14.2/webserver/upload/img/".$file_img;
//upload nội dung file từ đường dẫn tạm vào đường dẫn vừa tạo:
move_uploaded_file($file_tmpi,$pathimg);
if (isset($_FILES['img'])&&$_FILES['img']["name"]!=null) {
    $img = $linkimg;
}
else {
    $img = $_POST['URLi'];
}

  $_SESSION['glb'] = $glb;
	  	$sql = "INSERT INTO `model3d` (`id`, `scale`, `animations`, `name`, `glbUri`, `thumbnaillmageUri`, `category`, `width`, `height`, `depth`) VALUES (NULL, NULL, NULL, '$file_glb', '$glb', '$img', NULL, NULL, NULL, NULL);";
		mysqli_query($conn,$sql) or die("Thêm dữ liệu thất bại !");
		header("location: server.php");
  	  		
  	  
 ?>

