<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PATINHAS DO BEM</title>
    <link rel="stylesheet" href="css/petshop.css">
    <link rel="stylesheet" href="css/dicas.css">
    <style>img.id{white-space:pre}</style>
</head>
<body>
<header>
    <div class="container2"> <!-- class container carrega elementos de um lado para outro -->
        <img src="img/logosite3.png" alt="Logo Pet">
        <h1>PATINHAS DO BEM</h1>
        <nav class="menu">
            <a href="index.php">SOBRE</a>
            <a href="galeria.php">GALERIA</a>
            <a href="adote.php">QUERO ADOTAR</a>
            <a class="active" href="dicas.php">DICAS</a>            
        </nav>
    </div>
</header>

<!-- INÍCIO CONTEÚDO DO SITE -->
<section>
    <img id="dogao" src="img/dicas1.png" alt=>
        <h2>
            ⠀⠀⠀⠀⠀⠀⠀⠀
        </h2>
    
        <div class="miniaturas">
            
           
           
            <img src="img/dicas2.png" onclick="trocaDog(this.src, this.alt)">
        <!-- o THIS serve para passar o atributo do próprio elemento que CHAMA a função -->
            
            <img src="img/dicas3.png"  onclick="trocaDog(this.src, this.alt)">
            <img src="img/dicas4.png"  onclick="trocaDog(this.src, this.alt)">
            <img src="img/dicas5.png"  onclick="trocaDog(this.src, this.alt)"> 
            <img src="img/dicas6.png" onclick="trocaDog(this.src, this.alt)">
            <img src="img/dicas7.png" onclick="trocaDog(this.src, this.alt)">
            <img src="img/dicas8.png" onclick="trocaDog(this.src, this.alt)">
            <img src="img/dicas9.png" onclick="trocaDog(this.src, this.alt)">
            <img src="img/dicas10.png" onclick="trocaDog(this.src, this.alt)">
            <img src="img/dicas11.png" onclick="trocaDog(this.src, this.alt)">
        <!-- o THIS serve para passar o atributo do próprio elemento que CHAMA a função -->
            
        </div>
    </section>
<!-- FIM CONTEÚDO DO SITE -->

<footer>
    <!-- o footer não precisa ter heading -->
    <p>Denuncie maus tratos - 0800 61 8080</p>
  
</footer>
<script src="js/galeria.js"></script>
</body>
</html>
