<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PATINHAS DO BEM</title>
    <link rel="stylesheet" href="css/petshop.css">
    <link rel="stylesheet" href="css/galeria.css">
    <style>img.id{white-space:pre}</style>
</head>
<body>
<header>
    <div class="container2"> <!-- class container carrega elementos de um lado para outro -->
        <img src="img/logosite3.png" alt="Logo Pet">
        <h1>PATINHAS DO BEM</h1>
        <nav class="menu">
            <a href="index.php">SOBRE</a>
            <a class="active" href="galeria.php">GALERIA</a>
            <a href="adote.php">QUERO ADOTAR</a>
            <a href="dicas.php">DICAS</a>            
        </nav>
    </div>
</header>

<!-- INÍCIO CONTEÚDO DO SITE -->
<section>
    <h2>Adote um amigo</h2>
    <h3 style="color: grey">Animais em tom de cinza já estão adotados!</h3>

    <script src="script.js"></script>

    <div class="image-grid">
        <?php
        // Use PHP to fetch images from the database and generate image tags dynamically
        $dbHost = "127.0.0.1";
        $dbUser = "root";
        $dbPassword = "t3dnpoa4";
        $dbName = "pet";

        $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM animais";
        
        $result = $conn->query($sql);
        

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {                
                $statusAnimal = $row["status_adocao"];               
                echo '</div>';
                if ($statusAnimal == "S"){         
                    echo '<img src="img/dogs/' . $row["foto_animal"] . '" width="300px" height="300" class="grayscale-img"';
                    echo'</a>';
                }else{
                    $animalId = $row["id_animal"];
                    echo '<a href="escolhapet.php?id=' . $animalId . '">';
                    echo '<img src="img/dogs/' . $row["foto_animal"] . '" width="300px" height="300" onclick="trocaDog(this.src, this.alt)">';
                    echo '</a>';
                }
            }
        }
        $conn->close();
        ?>
    </div>
</section>
<!-- FIM CONTEÚDO DO SITE -->

<footer>
    <!-- Footer content -->
    <p>Denuncie maus tratos - 0800 61 8080</p>
</footer>
<script src="js/galeria.js"></script>
</body>
</html>
