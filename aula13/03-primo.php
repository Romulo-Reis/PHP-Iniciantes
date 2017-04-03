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
                $n = isset($_GET["num"])?$_GET["num"] : 1;
                $multiplos="";
                $qmultiplos = 0;
                $primo ="NÃO É PRIMO!";
                for($i = 1;$i <= $n;$i++){
                    $r = $n % $i;
                    if($r == 0){
                        $multiplos.=$i." ";
                        $qmultiplos++;
                    }
                }
                if($qmultiplos == 2){
                    $primo = "É PRIMO!";
                }
                echo "<h1>Analisando o número $n...</h1>";
                echo "Valores multiplos: $multiplos<br/><br/>";
                echo "Total de multiplos: $qmultiplos<br/><br/>";
                echo "RESULTADO: $n <span class='foco'>$primo</span>"
            ?>
            <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        </div>
    </body>
</html>