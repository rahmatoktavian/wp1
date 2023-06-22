<!DOCTYPE html>
<html>
<head>
	<title>Web Programming Update</title>
</head>
<body>
	<?php
	// calling db connection file
	include_once('../db_connect_supa.php');

	// data from url
	$id = $_GET["id"];

	// query data
	$result = $pdo->query("SELECT id, name FROM category WHERE id = ".$id);
	$row = $result->fetch(\PDO::FETCH_ASSOC);
	?>
	
	<form action="crud_update_submit.php?id=<?php echo $id ?>" method="POST">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="<?php echo $row["name"]?>" required></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit">Save</button>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>