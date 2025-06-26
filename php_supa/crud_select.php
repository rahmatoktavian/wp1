<!DOCTYPE html>
<html>
	<head>
		<title>Web Programming</title>
	</head>
	<body>
		<?php 
		// calling db connection file
		include_once('../db_connect_supa.php');

		// query data
		$result = $pdo->query("SELECT id, judul FROM buku");
		?>

		<table border="1">
			<thead>
				<tr>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<!-- data output from query -->
			<?php while($row = $result->fetch(\PDO::FETCH_ASSOC)):?>
				<tr>
					<td><?php echo $row["judul"];?></td>
					<td><a href="crud_update.php?id=<?php echo $row["id"];?>">Update</a></td>
				</tr>
        	<?php endwhile;?>
			</tbody>
		  </table>
		  
	</body>
</html>