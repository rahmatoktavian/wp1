<?php 
// calling db connection file
include_once('../db_connect.php');

// query data
$result = mysqli_query($conn, "SELECT id, name FROM category");
?>

<table class="table table-striped table-hover">
	<thead class="thead-dark">
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
			<td><a href="index.php?page=single/crud_update&id=<?php echo $row["id"];?>" class="btn btn-primary">Update</a></td>
		</tr>
			<?php endwhile;?>
	</tbody>
	</table>