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
		$sql = "SELECT book.id, book.title, book.stock, category.name AS category_name
				FROM book 
				JOIN category ON book.category_id = category.id
				ORDER BY category.name ASC, book.title ASC";

		// query data
		$result = mysqli_query($conn, $sql);
		?>

		<table border="1">
			<thead>
				<tr>
					<th>Book Title</th>
					<th>Category</th>
					<th>Stock</th>
				</tr>
			</thead>
			<tbody>
			<!-- data output from query -->
			<?php while($row = $result->fetch_assoc()):?>
				<tr>
					<td><?php echo $row["title"];?></td>
					<td><?php echo $row["category_name"];?></td>
					<td><?php echo $row["stock"];?></td>
				</tr>
        	<?php endwhile;?>
			</tbody>
		</table>

		<br />
		<a href="table_pdf.php" target="_blank">Export PDF</a>
		
	</body>
</html>