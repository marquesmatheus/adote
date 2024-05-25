<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM animais ");
?>

<html>
<head>	
	<title>Home</title>
</head>

<body>
	<h2>Home</h2>
	<p>
		<a href="add.php">Adicionar Dado</a>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Nome</strong></td>
			<td><strong>Raça</strong></td>
			<td><strong>Sexo</strong></td>
			<td><strong>Espécie</strong></td>
			<td><strong>Porte</strong></td>
			<td><strong>Idade</strong></td>

		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['nome_animal']."</td>";
			echo "<td>".$res['raca_animal']."</td>";
			echo "<td>".$res['sexo_animal']."</td>";	
			echo "<td>".$res['especie_animal']."</td>";	
			echo "<td>".$res['porte_animal']."</td>";	
			echo "<td>".$res['idade_animal']."</td>";	
			echo "<td><a href=\"edit.php?id=$res[id_animal]\">Edit</a> | 
			<a href=\"delete.php?id=$res[id_animal]\" onClick=\"return confirm('Tem certeza que quer apagar?')\">Delete</a></td>";
		}
		?>
	</table>
</body>
</html>
