<!DOCTYPE html>
<html>
<head>
	<title>Web Programming Update</title>
</head>
<body>
	<?php
	// calling db connection file
	include_once("../db_connect.php");

	// data from url
	$id = $_GET["id"];

	// query data book
	$bookData = mysqli_query($conn, "SELECT id, category_id, title FROM book WHERE id = ".$id);

	// data book
	$book = $bookData->fetch_assoc();

	// category data
	$categoryData = mysqli_query($conn, "SELECT id, name FROM category ORDER BY name");
	?>
	
	<form action="crud_update_submit.php?id=<?php echo $id ?>" method="POST">
	<table>
		<tr>
			<td>Category</td>
			<td>
				<select name="category_id" required>
					<?php while($category = $categoryData->fetch_assoc()):?>
						<?php if($book["category_id"] == $category["id"]):?>
							<option value="<?php echo $category["id"]?>" selected><?php echo $category["name"]?></option>
						<?php else:?>
							<option value="<?php echo $category["id"]?>"><?php echo $category["name"]?></option>
						<?php endif?>
					<?php endwhile?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type="text" name="title" value="<?php echo $book["title"]?>" required></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit">Save</button>
				<a href="crud_delete.php?id=<?php echo $id?>" onclick="return confirm('Are you sure guys?')" >Delete</a>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>