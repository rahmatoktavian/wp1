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
		$sql = "SELECT category.name AS category_name, SUM(book.stock) AS book_total
						FROM book 
						JOIN category ON book.category_id = category.id
						GROUP BY category.name
						ORDER BY category.name";

		// query data
		$result_table = mysqli_query($conn, $sql);
		$result_chart = mysqli_query($conn, $sql);
		?>

		<table border="1">
			<thead>
				<tr>
					<th>Category</th>
					<th>Book Total</th>
				</tr>
			</thead>
			<tbody>
			<!-- data output from query -->
			<?php while($row = $result_table->fetch_assoc()):?>
				<tr>
					<td><?php echo $row["category_name"];?></td>
					<td><?php echo $row["book_total"];?></td>
				</tr>
        	<?php endwhile;?>
			</tbody>
		</table>

		<!-- chart container -->
		<div id="container"></div>
		
		<!-- import highchart javascript file -->
		<script src="../highcharts/highcharts.js"></script>
		<script src="../highcharts/exporting.js"></script>
		<script src="../highcharts/export-data.js"></script>
		<script src="../highcharts/accessibility.js"></script>
		<script>
			Highcharts.chart('container', {
				chart: {
					type: 'pie'
				},
				title: {
					text: 'Book Comparison',
				},
				tooltip: {
					pointFormat: '{series.name}: <b>{point.y} Item ({point.percentage:.1f}%)</b>'
				},
				accessibility: {
					point: {
						valueSuffix: '%'
					}
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: false
						},
						showInLegend: true
					}
				},
				series: [{
					name: 'Book',
					colorByPoint: true,
					data: [
					<?php while($row = $result_chart->fetch_assoc()):?>
					{name: '<?php echo $row["category_name"]?>', y: <?php echo $row["book_total"]?>},
					<?php endwhile?>
					]
				}]
			});
		</script>
	</body>
</html>