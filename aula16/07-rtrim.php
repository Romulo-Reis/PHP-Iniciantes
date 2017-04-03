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
                $nome ="   José da Silva   ";
                echo "<p>$nome</p>";
                echo strlen($nome);
                $novo = rtrim($nome);
                echo "<p>$novo</p>";
                echo strlen($novo);
            ?>
        </div>
    </body>
</html>