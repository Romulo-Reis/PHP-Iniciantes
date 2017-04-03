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
                $txt = "Curso em Vídeo";
                $tamanho = strlen($txt);
                echo "<p>$txt</p>";
                echo "<p>$tamanho</p>";
            ?>
        </div>
    </body>
</html>