<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PATINHAS DO BEM</title>
    <link rel="stylesheet" href="css/petshop.css">
    <link rel="stylesheet" href="css/galeria.css">
</head>
<body>
<header>
    <div class="container2"> <!-- class container carrega elementos de um lado para outro -->
        <img src="img/logosite3.png" alt="Logo Pet">
        <h1>PATINHAS DO BEM</h1>	
    </div>
</header>

<!-- INÍCIO CONTEÚDO DO SITE -->
<section>
    <img src="img/cachorro.jpg"> 
<form action="addAnimal.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>Nome</td>
				<td><input type="text" name="nome"></td>
			</tr>
			<tr> 
				<td>Raça</td>
				<td><input type="text" name="raca"></td>
			</tr>
			<tr> 
				<td>Sexo</td>
				<td><input type="text" name="sexo"></td>
			</tr>
			<tr> 
				<td>Espécie</td>
				<td><input type="text" name="especie"></td>
			</tr>
			<tr> 
				<td>Porte</td>
				<td><input type="text" name="porte"></td>
			</tr>
			<tr> 
				<td>Idade</td>
				<td><input type="text" name="idade"> </td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Cadastrar"></td>
			</tr>
		</table>
	</form>
</section>
<!-- FIM CONTEÚDO DO SITE -->

<footer>
    <!-- o footer não precisa ter heading -->
	<p>Denuncie maus tratos - 0800 61 8080</p>
</footer>
<script src="js/galeria.js"></script>
</body>
</html>