<!DOCTYPE html>
<html>
	<head>
		<title>Web Programming</title>
	</head>
	<body>
		<?php 
		// calling db connection file
		include_once('../db_connect.php');

		// sql data book join category
		$sql = "SELECT book.id, category.id, book.title, category.name AS category_name
							FROM book 
							JOIN category ON book.category_id = category.id
							ORDER BY book.title";

		// query data
		$result = mysqli_query($conn, $sql);
		?>

		<a href="crud_insert.php">Insert</a>
		<br />

		<table border="1">
			<thead>
				<tr>
					<th>Category</th>
					<th>Book Title</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<!-- data output from query -->
			<?php while($row = $result->fetch_assoc()):?>
				<tr>
					<td><?php echo $row["category_name"];?></td>
					<td><?php echo $row["title"];?></td>
					<td><a href="crud_update.php?id=<?php echo $row["id"];?>">Update</a></td>
				</tr>
        	<?php endwhile;?>
			</tbody>
		  </table>
		  
	</body>
</html>