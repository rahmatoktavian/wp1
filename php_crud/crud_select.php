<!DOCTYPE html>
<html>
	<head>
		<title>Web Programming</title>
	</head>
	<body>
		<?php 
		// calling db connection file
		include_once('db_connect.php');

		// query data
		$result = mysqli_query($conn, "SELECT id, name FROM category");
		?>

		<a href="crud_insert.php">Insert</a>
		<br />

		<table border="1">
			<thead>
				<tr>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<!-- data output from query -->
			<?php while($row = $result->fetch_assoc()):?>
				<tr>
					<td><?php echo $row["name"];?></td>
					<td><a href="crud_update.php?id=<?php echo $row["id"];?>">Update</a></td>
				</tr>
        	<?php endwhile;?>
			</tbody>
		  </table>
		  
	</body>
</html>