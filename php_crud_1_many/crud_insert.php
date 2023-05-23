<!DOCTYPE html>
<html>
<head>
	<title>Web Programming Insert</title>
</head>
<body>
	<?php 
	// calling db connection file
	include_once('../db_connect.php');

	// category data
	$categoryData = mysqli_query($conn, "SELECT id, name FROM category ORDER BY name");
	?>
	
	<form action="crud_insert_submit.php" method="POST">
	<table>
		<tr>
			<td>Category</td>
			<td>
				<select name="category_id" required>
					<?php while($category = $categoryData->fetch_assoc()):?>
					<option value="<?php echo $category["id"]?>"><?php echo $category["name"]?></option>
					<?php endwhile?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type="text" name="title" value="" required></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit">Save</button></td>
		</tr>
	</table>
	</form>
</body>
</html>