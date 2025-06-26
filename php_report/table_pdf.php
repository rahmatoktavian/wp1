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

// pdf library
require '../vendor/autoload.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

// generate pdf
$html = '<table border="1">
			<thead>
				<tr>
					<th>Book Title</th>
					<th>Category</th>
					<th>Stock</th>
				</tr>
		  	</thead>
		  	<tbody>';

			while($row = $result->fetch_assoc()) {
				$html .= '<tr>
							<td>'.$row['title'].'</td>
							<td>'.$row['category_name'].'</td>
							<td>'.$row['stock'].'</td>
						</tr>';
			}

$html .= '</tbody>
		</table>';

$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'potrait');
$dompdf->render();
$dompdf->stream('book.pdf');
?>