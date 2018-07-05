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
			    <th scope="col">Voir les 10 derniers</th>
			</tr>
		</thead>
		<tbody>
	<?php
		$content = file_get_contents('export.json');
		$json = json_decode($content, true);
		$flownum = '';
		foreach($json as $item) {
			//if it is the first log of a flow displays the log in the table
			if ($item['flownum'] != $flownum) {
				echo '<tr>';
				foreach($item as $value) {
					echo '<td>'.$value.'</td>';
				}
				echo '<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#'.$item['flownum'].'Modal">Les 10 derniers</button></td>';
				echo '</tr>';
			} else {
				//else pushes the log in a array
			}
			$flownum = $item['flownum'];
			//creates the modal
		}
	?>
		</tbody>
	</table>
</body>
</html>