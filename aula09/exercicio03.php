<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="utf-8">
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        span.alerta{
            color: #a92328;
        }
        .botao{
            background-color: rgba(21, 15, 21, 0.49);
            color: rgba(0, 0, 0, 0.13);
        }
    </style>
</head>
    <body>
        <div>
            <?php
                $n1 = isset($_GET["n1"])?$_GET["n1"]:1;
                $n2 = isset($_GET["n2"])?$_GET["n2"]:1;
                $m = ($n1 + $n2)/2;
                $n1 = number_format($n1, 1);
                $n2 = number_format($n2, 1);
                $m = number_format($m, 1);
                if ($m < 5){
                    $situacao="REPROVADO";
                }
                elseif($m >=5 && $m < 7){
                    $situacao="RECUPERAÇÃO";
                }
                else{
                    $situacao="APROVADO";
                }
                echo "A média entre <span class='alerta'>$n1</span> e <span class='alerta'>$n2</span> é igual a <span class='alerta'>$m</span>.<br/>";
                echo "Situação do aluno: <span class='alerta'>$situacao</span>.";
            ?>
            <a href="exercicio03.html"><button class="botao">Voltar</button></a>
        </div>
    </body>
</html>