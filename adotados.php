<!DOCTYPE html>
<html>
<head>
    <title>Pet's e Seus novos Donos!</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            background-color: #007bff;
            color: #fff;
            padding: 20px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }
    </style>
<body>
            <?php
            $servername = "127.0.0.1";
            $username = "root";
            $password = "t3dnpoa4";
            $dbname = "pet";
        
            $conn = new mysqli($servername, $username, $password, $dbname);
           
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
            
        ?>

    <h1>Pet's e Seus novos Donos</h1>
    <table border="1">
        <tr>
            <th>Data Adoção</th>
            <th>Nome Pessoa</th>
            <th>Email Pessoa</th>
        </tr>
        <?php
        $sql = "SELECT d.data_adocao as adocao, p.nome_pessoa, p.end_pessoa,p.email_pessoa,a.id_animal
        from adocao d inner join pessoas p on p.id_pessoa = d.id_pessoa
        inner join animais a on a.id_animal = d.id_animal";
        $stmt = $conn->query($sql);

        while ($row = $stmt->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['adocao'] . '</td>';
            echo '<td>' . $row['nome_pessoa'] . '</td>';
            echo '<td>' . $row['email_pessoa'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>
