<?php
	// calling db connection file
	include_once("../db_connect.php");

	// data from url
	$id = $_GET["id"];
	
	// query data
	$result = mysqli_query($conn, "SELECT id, name FROM category WHERE id = ".$id);

	// return data
	$row = $result->fetch_assoc();
	?>
	
	<form action="index.php?page=single/crud_update_submit&id=<?php echo $id ?>" method="POST">
	<table class="table table-striped">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="<?php echo $row["name"]?>" class="form-control"></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit" class="btn btn-primary">Save</button>
			</td>
		</tr>
	</table>
</form>