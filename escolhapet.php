<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PATINHAS DO BEM</title>
    <link rel="stylesheet" href="css/petshop.css">
    <link rel="stylesheet" href="css/adote.css">

    <style>
        /* Basic CSS for the form */
        form {
            max-width: 500px;
            margin: 0 auto;
        }

        table {
            width: 100%;
        }

        table td {
            padding: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<header>
    <div class="container2">
        <img src="img/logosite3.png" alt="Logo Pet">
        <h1>PATINHAS DO BEM</h1>
        <nav class="menu">
            <a href="index.php">SOBRE</a>
            <a href="galeria.php">GALERIA</a>
            <a class="active" href="adote.php">QUERO ADOTAR</a>
            <a href="dicas.php">DICAS</a>
        </nav>
    </div>
</header>
<section class="container">
    <h1>Escolha seu novo pet na galeria para adoção!</h1>
                <?php
                 $servername = "127.0.0.1";
                 $username = "root";
                 $password = "t3dnpoa4";
                 $dbname = "pet";
             
                 $conn = new mysqli($servername, $username, $password, $dbname);
                
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                if (isset($_GET['id'])) {
                    $idPet = $_GET['id'];
                
                // Fetch city names from the database
                $query = "SELECT * FROM animais where id_animal = $idPet";
                $result = $conn->query($query);

                $row = $result->fetch_assoc();
                    echo "<h1>Você escolheu: " .  $row['nome_animal'] . "</h1>";
                    echo '<h1><img src="img/dogs/' . $row["foto_animal"] . '"width="300px" height="300"></h1>';
                    echo '<h1 class="red-text" style="color: blue; justify-content: center">Dados do seu pet escolhido.</h1>';

                    echo "<h1>Idade do Animal: " .  $row['idade_animal'] . "</h1>";
                    echo "<h1>Porte do Animal: " .  $row['porte_animal'] . "</h1>";
                    echo "<h1>Raça do Animal: " .  $row['raca_animal'] . "</h1>";
                    echo "<h1>Sexo do Animal: " .  $row['sexo_animal'] . "</h1>";
                    echo '<h1 class="red-text" style="color: red; justify-content: center">Preencha corretamente e aguarde a aprovação para a adoção.</h1>';


                }
                ?>            
                
    <form action="inserepessoa.php" method="post">
    <input type="hidden" name="id" value="<?php echo $idPet;?>">

        <label for="name">Coloque seu Nome Completo:</label>
        <input type="text" id="name" name="nome" required>
        <br>
        
        <label for="idade">Coloque sua Idade:</label>
        <input type="text" id="idade" name="idade" required>
        <br>
        
        <label for="telefone">Coloque seu Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>
        <br>
        
        <label for="endereco">Coloque seu Endereço:</label>
        <input type="text" id="endereco" name="endereco" required>
        <br>
        <label for="email">Coloque seu Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <br>
        
        <input type="submit" value="Enviar">
    </form>
</section>

<footer>
    <p>DENUNCIE MAUS TRATOS, LIGUE: 0800 61 8080</p>
</footer>

<script src="js/galeria.js"></script>
</body>
</html>
