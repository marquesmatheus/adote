<!DOCTYPE html>
<html>
<head>
    <title>Adicione um pet!</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 20px;
            width: 80%;
            max-width: 500px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="file"] {
            width: 100%;
            margin-top: 5px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Formulário de Cadastro de Pets!</h1>

        <form action="insere_pet.php" method="post" enctype="multipart/form-data">
			<br><br>
            <label for="nome_animal">Nome do Pet:</label>
            <input type="text" name="nome_animal" required>
            
            <label for="idade_animal">Idade do Animal:</label>
            <textarea name="idade_animal" required></textarea>
			<label for="raca_animal">Raça do Animal:</label>
            <textarea name="raca_animal" required></textarea>
			<label for="porte_animal">Porte do Animal:</label>
			<textarea name="porte_animal" required></textarea>
			<label for="sexo_animal">Sexo do Animal:</label>
			<textarea name="sexo_animal" required></textarea>

            
            <label for="foto_animal">Imagem do Pet:</label>
            <input type="file" name="foto_animal" accept="image/*" required>
            
            <button type="submit">Adicionar Animal</button>
        </form>
    </div>
</body>
</html>
