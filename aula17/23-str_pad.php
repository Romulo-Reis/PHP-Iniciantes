<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="utf-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
    <body>
        <div>
            <?php
              $nome = "Guanabara";
              $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
              print "Meu professor $novo é legal!";
            ?>
        </div>
    </body>
</html>