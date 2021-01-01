<?php
	$conn = new mysqli('localhost','root','','model3d') or die("Kết nối thất bại");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>website GLB</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/SEO4-Nhom14.2/webserver/css/bootstrap.min.css">

    <script src="/SEO4-Nhom14.2/webserver/js/jquery.min.js"></script>
    <script src="/SEO4-Nhom14.2/webserver/js/popper.min.js"></script>
    <script src="/SEO4-Nhom14.2/webserver/js/bootstrap.min.js"></script>
    <script src="/SEO4-Nhom14.2/webserver/js/code.jquery.js"></script>
    <link rel="icon" href="/SEO4-Nhom14.2/webserver/upload/favicon.ico" type="image/ico" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="/SEO4-Nhom14.2/webserver/css/styleweb.css">

    <script src='/SEO4-Nhom14.2/webserver/js/kit.fontawesome.js'></script>

    <link rel="stylesheet" href="/SEO4-Nhom14.2/webserver/css/font-awesome.min.css">
    <link rel="stylesheet" href="/SEO4-Nhom14.2/webserver/css/adminlte.min.css">
       <style type="text/css">
			input[type=text] {
			  width: 100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  box-sizing: border-box;
			  border: 2px solid #58257b;
			  background-color: 
			}
			
		</style>
	</head>
    <header class="sticky-top">


        <!--    class="fixed-top"-->
        <!--    <div >...</div>-->
        <div >
            <nav class="navbar navbar-expand-lg navbar-ligh bg-li " >

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="web.php" ><i class='fas fa-house-user' ></i>  &ensp;|<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="form_upload.php">Upload file &ensp;|</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="listFile.php" tabindex="-1" aria-disabled="true">List file GLB  &ensp;|</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/SEO4-Nhom14.2/Index.html" tabindex="-1" aria-disabled="true">Show view GLB  &ensp;&ensp;|</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pd-0 " href="login.php" tabindex="-1" aria-disabled="true">Logout  &ensp;|</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="javascript:void(0);" onclick="myFunction()" tabindex="-1" aria-disabled="true">Help</a>
                        </li>
                    </ul>
                    <!-- -->
                    <p class="nav-link" id="day">SE04_Nhóm 14.2 -  <?php echo date("l, M d, Y")?>&emsp;</p>
                </div>
            </nav>
        </div>
    </header>
    <script>
        function myFunction() {
            alert("Website quản lý danh sách GLB \n\n Tác giả: \n SEO4_Nhom14.2 \n\n Đinh Thị Thắm\n Hoàng Thị Mai\n Vũ Thị Phương\n Trần Thúy Nga");
        }
    </script>
	<body>
        <br>
<h2>Upload File</h2>
	<div id ="noidung" style="width: 70%; 
                height: 300px;
                border: 2px solid #100f0f00;">
		<form role="form" action="add.php" method = "post" enctype="multipart/form-data" >
			
			
            <strong><u>Glb</u> :</strong>
			<input type="file" name="glb" id="glb" accept="" value="<?php if (isset($_SESSION['glb'])) {echo $_SESSION['glb'];} ?>" >

		    <input type="text" name = "URL" class="form-control" placeholder="URL: Enter ..." value="<?php if (isset($_SESSION['glb'])) {echo $_SESSION['glb'];} ?>">
            <br>
            <strong><u>Image</u> :</strong>
            <input type="file" name="img" id="img" accept="" value="<?php if (isset($_SESSION['img'])) {echo $_SESSION['img'];} ?>" >

            <input type="text" name = "URLi" class="form-control" placeholder="URL: Enter ..." value="<?php if (isset($_SESSION['img'])) {echo $_SESSION['img'];} ?>">
            <br>
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