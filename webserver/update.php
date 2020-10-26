<?php
	$conn = new mysqli('localhost','root','','model3d') or die("Kết nối thất bại");
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <style type="text/css">
			input[type=text] {
			  width: 100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  box-sizing: border-box;
			  border: 2px solid #58257b;
			  background-color: 
			}
			#noidung{
				width: 70%; 
				height: 300px;
				border: 2px solid #100f0f00;

			}
		</style>
	</head>
	<body>
<h1>Nội dung</h1>
	<div id ="noidung" >
		<form method="post" >
			
			Scale :  <input type="text" name="scale"><br>
			Animations : <input type="text" name="animation"><br>
			Name : <input type="text" name="name"><br>
			Glb :
			<input type="file" name="glb" id="fileupload" accept="" value="<?php if (isset($_SESSION['avatar'])) {echo $_SESSION['avatar'];} ?>" >
		    URL:
		    <input type="text" name = "URL" class="form-control" placeholder="Enter ..." value="<?php if (isset($_SESSION['avatar'])) {echo $_SESSION['avatar'];} ?>">
			
			thumbnaillmageUri : <input type="file" name="glbimg" id="fileupload" accept="image/*" value="<?php if (isset($_SESSION['avatar'])) {echo $_SESSION['avatar'];} ?>" >
		    URL:
		    <input type="text" name = "URL" class="form-control" placeholder="Enter ..." value="<?php if (isset($_SESSION['avatar'])) {echo $_SESSION['avatar'];} ?>">
			category : <input type="text" name="category"><br>
			width : <input type="text" name="width"><br>
			height : <input type="text" name="height"><br>
			depth : <input type="text" name="depth"><br>
			 

			<input type="submit" name="update" value="Chấp nhận"><br><br><br><br><br><br>
			<?php 
    if (@$_GET['click'] == true) {
      unset($_SESSION['file']);
      
    }

  ?>
  
		</form>
	</div>
<?php

	if(isset($_POST['update'])){
		
		$scale = $_POST['scale'];
		$animation = $_POST['animation'];
		$name = $_POST['name'];
		$glb = $_POST['glb'];
		$glbimg = $_POST['glbimg'];
		$category = $_POST['category'];
		$width = $_POST['width'];
		$height = $_POST['height'];
		$depth = $_POST['depth'];

		$query = "INSERT INTO `model3d` (`id`, `scale`, `animations`, `name`, `glbUri`, `thumbnaillmageUri`, `category`, `width`, `height`, `depth`) VALUES (NULL, '$scale', '$animation', '$name', '$glb', '$glbimg', NULL, '$width', '$height', '$depth');";
		 mysqli_query($conn,$query) or die("Sửa dữ liệu thất bại !");
		 	 
		 	header('location: web.php');
		 	$conn->set_charset("utf8");
	}
	

?>


</body>
</html>