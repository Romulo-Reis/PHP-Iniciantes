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
              $frase = "Gosto de estudar Matemática! matemática é muito legal.";
              $novaFrase = str_ireplace("matemática","PHP",$frase);
              echo "$novaFrase";
            ?>
        </div>
    </body>
</html>