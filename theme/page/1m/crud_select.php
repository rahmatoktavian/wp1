
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

<table>
	<thead>
	<tr>
		<th>Category</th>
		<th>Book Title</th>
	</tr>
</thead>
<tbody>
<!-- data output from query -->
<?php while($row = $result->fetch_assoc()):?>
	<tr>
		<td><?php echo $row["category_name"];?></td>
		<td><?php echo $row["title"];?></td>
	</tr>
		<?php endwhile;?>
</tbody>
</table>