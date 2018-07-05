<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Tableau des imports catalogue</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<table class="table table-striped table-bordered">
		<thead>
			<caption>Logs des imports catalogues dans Lengow</caption>
			<tr>
			    <th scope="col">Nom flux</th>
			    <th scope="col">Numéro flux</th> 
			    <th scope="col">Date import</th>
			    <th scope="col">Ip import</th>
			</tr>
		</thead>
		<tbody>
	<?php
		$content = file_get_contents('export.json');
		$json = json_decode($content, true);
		foreach($json as $item) {
			echo '<tr>';
			foreach($item as $value) {
				echo '<td>'.$value.'</td>';
			}
			echo '</tr>';
		}
	?>
		</tbody>
	</table>
</body>
</html>