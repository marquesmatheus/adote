<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM animais WHERE id_animal = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$nome = $resultData['nome_animal'];
$raca = $resultData['raca_animal'];
$sexo = $resultData['sexo_animal'];
$especie = $resultData['especie_animal'];
$porte = $resultData['porte_animal'];
$idade = $resultData['idade_animal'];
?>
<html>
<head>	
	<title>Editar Dados</title>
</head>

<body>
    <h2>Editar Dados</h2>
    <p>
	    <a href="listanimal.php">Home</a>
    </p>
	
	<form name="edit" method="post" action="editAnimal.php">
		<table border="0">
			<tr> 
				<td>Nome</td>
				<td><input type="text" name="nome" value="<?php echo $nome; ?>"></td>
			</tr>
			<tr> 
				<td>Raça</td>
				<td><input type="text" name="raca" value="<?php echo $raca; ?>"></td>
			</tr>
			<tr> 
				<td>Sexo</td>
				<td><input type="text" name="sexo" value="<?php echo $sexo; ?>"></td>
			</tr>
			<tr> 
				<td>Espécie</td>
				<td><input type="text" name="especie" value="<?php echo $especie; ?>"></td>
			</tr>
			<tr> 
				<td>Porte</td>
				<td><input type="text" name="porte" value="<?php echo $porte; ?>"></td>
			</tr>
			<tr> 
				<td>Idade</td>
				<td><input type="text" name="idade" value="<?php echo $idade; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
