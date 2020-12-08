<!DOCTYPE html>
<html>
    <head>
        <title>website GLB</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="icon" href="http://hus.vnu.edu.vn/favicon.ico" type="image/ico" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="/SEO4-Nhom14.2/webserver/css/styleweb.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css">
       <style type="text/css">
       	table {
			  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  width: 70%;
			  margin: auto;
			}

			td, th {
			  border: 2px solid #dddddd;
			  text-align: left;
			  padding: 8px;
			}

			tr:nth-child(even) {
			  background-color: #dddddd;
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
                            <a class="nav-link " href="server.php" tabindex="-1" aria-disabled="true">List file GLB  &ensp;|</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Show view GLB  &ensp;&ensp;|</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pd-0 " href="login.php" tabindex="-1" aria-disabled="true">Logout  &ensp;|</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Help</a>
                        </li>
                    </ul>
                    <!-- -->
                    <p class="nav-link" id="day">SE04_Nhóm 14.2 -  <?php echo date("l, M d, Y")?>&emsp;</p>
                </div>
            </nav>
        </div>
    </header>
    <body>

    	<table border="2">
 		<thead>
 			<th>Id</th>
 			<th>Scale</th>
 			<th>Animations</th>
 			<th>Name</th>
 			<th>Glb</th>
 			<th>image</th>
 			<th>category</th>
 			<th>width</th>
 			<th>height</th>
 			<th>depth</th>
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
				<td><?php echo $user_info['scale']; ?></td>
				<td><?php echo $user_info['animations']; ?></td>
				<td><?php echo$user_info['name']; ?></td>
				<td><?php echo $user_info['glbUri']; ?></td>
				
				<td><img src="<?php echo $user_info['thumbnaillmageUri']; ?>" style="width: 50px; height: 50px"></td>
				<td><?php echo$user_info['category']; ?></td>
				<td><?php echo$user_info['width']; ?></td>
				<td><?php echo$user_info['height']; ?></td>
				<td><?php echo$user_info['depth']; ?></td>
				<td><a href='delete.php?id=<?php echo $id;?>'>Delete</a></td>
			</tr>
			<?php 
				}
			}
			mysqli_close($conn);
 			 ?>
 		</tbody>
 		

 	</table>
 	<br>
 		<center><button><a href='form_upload.php'>Upload file glb</a></button></center>
			
			
</body>
</html>