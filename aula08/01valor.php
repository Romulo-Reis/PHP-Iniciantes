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
            $valor = $_GET["v"];
            $rq = sqrt($valor);
            echo "A raiz de $valor é igual a ". number_format($rq, 2);
        ?>
        <a href="01-exercicio.html">voltar</a>
    </div>
</body>
</html>