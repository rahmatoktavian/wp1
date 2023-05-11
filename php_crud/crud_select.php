<!DOCTYPE html>
<html>
	<head>
		<title>Web Programming</title>
		<!-- import jquery -->
		<script
			src="https://code.jquery.com/jquery-3.6.4.js"
			integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
			crossorigin="anonymous"></script>
		
		<!-- import datatables js -->
		<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

		<!-- import datatables css -->
		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
		
		<!-- datatable config -->
		<script>
			$(document).ready( function () {
				$('#umb-table').DataTable({
					// paging: false,
				});
			} );
		</script>
	</head>
	<body>
    <?php 
    // calling db connection file
    include_once('db_connect.php');

    // data query
    $result = mysqli_query($conn, "SELECT id, name FROM category");
    ?>

		<table border="1">
			<thead>
				<tr>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>
			<!-- data output from query -->
			<?php while($row = $result->fetch_assoc()):?>
				<tr>
					<td><?php echo $row["name"];?></td>
				</tr>
        	<?php endwhile;?>
			</tbody>
		  </table>
		  
	</body>
</html>