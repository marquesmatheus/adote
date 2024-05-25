<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection information
    $servername = "127.0.0.1";
    $username = "root";
    $password = "t3dnpoa4";
    $dbname = "pet";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection falhou: " . $conn->connect_error);
    }

    // Retrieve data from the form
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $email = $_POST["email"];
    $get_value = $_POST['id'];

    // Insert the data into the database
    $sql = "INSERT INTO pessoas (nome_pessoa, idade_pessoa, tel_pessoa, end_pessoa, email_pessoa) VALUES ('$nome', $idade, '$telefone', '$endereco', '$email')";
    $sql2 = "UPDATE animais SET status_adocao = 'S' WHERE id_animal = '$get_value'";
    $sql3 = "INSERT INTO adocao (id_pessoa, id_animal, data_adocao) 
             SELECT id_pessoa, '$get_value', NOW() FROM pessoas ORDER BY id_pessoa desc LIMIT 1";

    if ($conn->query($sql) === true) {
        echo "Dado inserido com sucesso!!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    if ($conn->query($sql2) === true) {
        echo "<br>";
        echo "Animal atualizado com sucesso!!";
    } else {
        echo "Erro: " . $sql2 . "<br>" . $conn->error;
    }
    if ($conn->query($sql3) === true) {
        echo "<br>";
        echo "Adoção atualizada com sucesso!!";
    } else {
        echo "Erro: " . $sql3 . "<br>" . $conn->error;
    }
    // Close the database connection
    $conn->close();

    // Move the header function outside of the if block
    echo '<script>window.location.href = "index.php";</script>';
    exit();
}
?>
