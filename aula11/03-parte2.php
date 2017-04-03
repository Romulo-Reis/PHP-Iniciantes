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
                $inicio = isset($_GET["inicio"])?$_GET["inicio"]: 0;
                $final = isset($_GET["final"])?$_GET["final"]: ++$inicio;
                $incremento = isset($_GET["incremento"])?$_GET["incremento"]: 1;
                $i = $inicio;
                if($inicio > $final) {
                    $incremento *= -1;
                    while($i >= $final){
                        echo "$i ";
                        $i+=$incremento;
                    }
                }
                else{
                    while($i <= $final){
                        echo "$i ";
                        $i+=$incremento;
                    }
                }
            ?>
            <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
        </div>
    </body>
</html>