<html>
<head>
	<title>Adicionar Dados</title>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
	$idade = mysqli_real_escape_string($mysqli, $_POST['idade']);
	$telefone = mysqli_real_escape_string($mysqli, $_POST['telefone']);
	$endereco = mysqli_real_escape_string($mysqli, $_POST['endereco']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$especie = mysqli_real_escape_string($mysqli, $_POST['especie_animal']);
	$porte = mysqli_real_escape_string($mysqli, $_POST['porte_animal']);
	$idade_animal = mysqli_real_escape_string($mysqli, $_POST['idade_animal']);
		
	// Check for empty fields
	if (empty($name) || empty($age) || empty($email)) {
		if (empty($nome)) {
			echo "<font color='red'>Nome está vazio.</font><br/>";
		}
		
		if (empty($idade)) {
			echo "<font color='red'>Idade está vazia.</font><br/>";
		}
		
		if (empty($telefone)) {
			echo "<font color='red'>Telefone está vazio.</font><br/>";
		}
		if (empty($endereco)) {
			echo "<font color='red'>Endereço está vazio.</font><br/>";
		}
		if (empty($email)) {
			echo "<font color='red'>E-mail está vazio.</font><br/>";
		}
		if (empty($especie)) {
			echo "<font color='red'>Espécie está vazia.</font><br/>";
		}
		if (empty($porte)) {
			echo "<font color='red'>Porte está vazio.</font><br/>";
		}
		if (empty($idade_animal)) {
			echo "<font color='red'>Idade do animal está vazia.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO users (`name`, `age`, `email`) VALUES ('$name', '$age', '$email')");
		
		// Display success message
		echo "<p><font color='green'>Dados adicionados com sucesso!</p>";
		echo "<a href='index.php'>Veja Resultado</a>";
	}
}
?>
</body>
</html>
