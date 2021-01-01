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

    </head>
    <header class="sticky-top">



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
                            <a class="nav-link " href="/SEO4-Nhom14.2/Index.html?url=CesiumMan&file=CesiumMan&format=.gltf" tabindex="-1" aria-disabled="true">Show view GLB  &ensp;&ensp;|</a>
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
        <div id="container">
            <div> <h3 style="color: #9f1447"> <center>Danh sách file GLB</center></h3></div>
    	    <table border="2" id ="table">
 		<thead>
 			<th>Id</th>
 			<!-- <th>Scale</th>
 			<th>Animations</th> -->
 			<th>Name</th>
 			<th>Glb</th>
 			<th>image</th>
 			<!-- <th>category</th>
 			<th>width</th>
 			<th>height</th>
 			<th>depth</th> -->
 			<th></th>
 		</thead>
 		<tbody>
			<?php
			require'connectSQL.php';
			$sql = "SELECT * FROM `model3d`";
			
			$conn->set_charset("utf8"); 
			if($result = $conn->query($sql) )
			{ 
			    while($user_info = mysqli_fetch_array($result))
			    {
			        $id = $user_info['id'];
			        
			        
            	?>
			<tr>
				<td><?php echo $id; ?></td>
				<!-- <td><?php echo $user_info['scale']; ?></td>
				<td><?php echo $user_info['animations']; ?></td> -->
				<td><?php echo$user_info['name']; ?></td>
				<td><?php echo $user_info['glbUri']; ?></td>
				
				<td><img src="<?php echo $user_info['thumbnaillmageUri']; ?>" style="width: 50px; height: 50px"></td>
				<!-- <td><?php echo$user_info['category']; ?></td>
				<td><?php echo$user_info['width']; ?></td>
				<td><?php echo$user_info['height']; ?></td>
				<td><?php echo$user_info['depth']; ?></td> -->
				<td><a href='delete.php?id=<?php echo $id;?>' id = 'pink'>Delete</a></td>
			</tr>
			<?php 
				}
			}
			mysqli_close($conn);
 			 ?>
 		</tbody>
 		

 	</table>
            <br>
            <center><button id="up"><h5><a href='form_upload.php'>Upload file glb</a></h5></button></center>
        </div>



			
			
</body>
</html>