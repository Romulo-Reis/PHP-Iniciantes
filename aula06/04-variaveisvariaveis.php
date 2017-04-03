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
            $x = "abc";
            $$x="def";
            echo "O conteudo da variavel x é $x";
            echo "<br/>A variavel ABC criada recebeu o valor $abc";
        ?>
    </div>
</body>
</html>