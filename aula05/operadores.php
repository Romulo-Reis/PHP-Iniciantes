<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operações Aritmeticas</title>
</head>
    <body>
        <div>
            <?php
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                $m = ($n1 + $n2)/2;
                echo "<h2>Valores recebidos: $n1 e $n2</h2>";
                echo "A soma vale ". ($n1 + $n2);
                echo "<br/>A subtração vale ". ($n1 - $n2);
                echo "<br/>A multiplicação vale ". ($n1 * $n2);
                echo "<br/>A divisão vale ". ($n1 / $n2);
                echo "<br/>O modulo vale ". ($n1 % $n2);
                echo "<br/>A média vale $m";
            ?>
        </div>
    </body>
</html>