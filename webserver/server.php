<!DOCTYPE html>
<html>
    <head>
        <title></title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
 			<th></th>
 		</thead>
 		<tbody>
			<?php
			// $servername = "127.0.0.1";
			// $username = "root";
			// $password = "";
			// $database = "model3d";

			// // Create connection
			// $conn = mysqli_connect($servername, $username, $password,$database);
			// if (!$conn) {
			//   die("Connection failed: " . mysqli_connect_error());
			// }
			// echo "Connected successfully<br>";
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
				<td><a href='update.php?id=<?php echo $id;?>'>Update</a></td>
				<td><a href=''>Xóa</a></td>
			</tr>
			<?php 
				}
			}
			mysqli_close($conn);
 			 ?>
 		</tbody>
 		

 	</table>
 	<br>
 		<center><button><a href='update.php?id=<?php echo $id;?>'>Upload file glb</a></button></center>
			
			
</body>
</html>