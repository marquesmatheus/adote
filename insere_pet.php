<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_pet = $_POST["nome_animal"];
    $idade_pet = $_POST["idade_animal"];
    $raca_pet = $_POST["raca_animal"];
    $porte_pet = $_POST["porte_animal"];
    $foto_pet = $_POST["foto_animal"];
    $sexo_pet = $_POST["sexo_animal"];
    $status_pet = "N";

    
    if (isset($_FILES["foto_animal"]) && $_FILES["foto_animal"]["error"] == 0) {
        $upload_dir = "img/dogs/"; 
        $target_path = $upload_dir . basename($_FILES["foto_animal"]["name"]);
        $image_path_in_db = basename($_FILES["foto_animal"]["name"]);

        if (move_uploaded_file($_FILES["foto_animal"]["tmp_name"], $target_path)) {
            echo "Upload realizado com sucesso!";
        } else {
            echo "Erro ao move ao diretório destino.";
        }
    } else {
        echo "Erro ao subir a imagem, verificar o formato.";
    }


    $servername = "127.0.0.1";
    $username = "root";
    $password = "t3dnpoa4";
    $dbname = "pet";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    $insert_query = "INSERT INTO animais (nome_animal, idade_animal, raca_animal,porte_animal,foto_animal,sexo_animal,status_adocao) 
    VALUES ('$nome_pet', '$idade_pet', '$raca_pet', '$porte_pet', '$image_path_in_db','$sexo_pet','$status_pet')";
    
    if ($conn->query($insert_query) === TRUE) {
        echo "Animal adicionado com sucesso";
    } else {
        echo "Error: " . $conn->error;
    }
    $conn->close();
    echo '<script>window.location.href = "galeria.php";</script>';
    exit();
    }    
?>