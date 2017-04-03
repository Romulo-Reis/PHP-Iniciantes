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
                $v = isset($_GET["val"])?$_GET["val"] : 1;
                $i = 1;
                echo "<h1>Mostrando a Tabuada de $v</h1>";
                do{
                    $r = $v * $i;
                    echo "$v * $i = $r<br/>";
                    $i++;
                }while($i<= 10);
            ?>
            <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
        </div>
    </body>
</html>