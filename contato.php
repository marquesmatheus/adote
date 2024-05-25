<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PATINHAS DO BEM</title>
    <link rel="stylesheet" href="css/petshop.css">
    <link rel="stylesheet" href="css/contato.css">
</head>
<body>
<header>
    <div class="container2"> <!-- class container carrega elementos de um lado para outro -->
        <img src="img/logosite3.png" alt="Logo Pet">
        <h1>PATINHAS DO BEM</h1>
        <nav class="menu">
            <a href="index.php">SOBRE</a>
            <a href="galeria.php">GALERIA</a>
            <a class="active" href="contato.php">CONTATO</a>
            <a href="cadastro.php">CADASTRO</a>
        </nav>
    </div>
</header>

<!-- INÍCIO CONTEÚDO DO SITE -->
<section>
    <!-- dentro do iframe, colocar o endereço do mapa (maps, compartilhar, incorporar um mapa, copiar html e substituir toda a linha) -->
    <iframe src=></iframe>

    <form onsubmit="return validaForm()">
        <input id="nome" type="text" name="nome" placeholder="Digite seu nome"><!-- placeholder é uma informação do que é/para que serve o campo -->
        <input id="email" type="text" name="email" placeholder="Digite seu e-mail">
        <textarea id="mensagem" name="mensagem" placeholder="Digite sua mensagem"></textarea>
        <button type="submit">ENVIAR =)</button>

        <!-- mensagem de erro, por JS -->
        <p id="erro"></p> 
    </form>



</section>

<!-- FIM CONTEÚDO DO SITE -->
<footer>
    <!-- o footer não precisa ter heading -->
  
</footer>
<script src="js/contato.js"></script>
</body>
</html>