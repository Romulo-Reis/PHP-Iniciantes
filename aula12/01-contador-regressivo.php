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
                $c = 10;
                do{
                    echo "$c ";
                    $c-=2;
                }while($c >= 0);
            ?>
        </div>
    </body>
</html>