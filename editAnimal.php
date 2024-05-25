<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
	$raca = mysqli_real_escape_string($mysqli, $_POST['raca']);
	$sexo = mysqli_real_escape_string($mysqli, $_POST['sexo']);
	$especie = mysqli_real_escape_string($mysqli, $_POST['especie']);
	$porte = mysqli_real_escape_string($mysqli, $_POST['porte']);
	$idade = mysqli_real_escape_string($mysqli, $_POST['idade']);	

	// Check for empty fields

		// Update the database table
		$result = mysqli_query($mysqli, "update animais set nome_animal = '$nome', raca_animal = '$raca', sexo_animal = '$sexo', especie_animal = '$especie', porte_animal = '$porte', idade_animal = '$idade' WHERE id_animal = $id");
		
		// Display success message
		echo "<p><font color='green'>Data Atualizados com sucesso!</p>";
		echo "<a href='listanimal.php'>Voltar a listagem de animais ...</a>";
	
}
