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