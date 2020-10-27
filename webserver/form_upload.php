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
		<form role="form" action="add.php" method = "post" enctype="multipart/form-data" >
			
			
			Glb :
			<input type="file" name="glb" id="glb" accept="" value="<?php if (isset($_SESSION['glb'])) {echo $_SESSION['glb'];} ?>" >
		    
		    <input type="text" name = "URL" class="form-control" placeholder="URL: Enter ..." value="<?php if (isset($_SESSION['glb'])) {echo $_SESSION['glb'];} ?>">

			<input type="submit" name="update" value="Chấp nhận">
			<?php 
    if (@$_GET['click'] == true) {
      unset($_SESSION['glb']);
      
    }

  ?>
  
		</form>
	</div>


</body>
</html>