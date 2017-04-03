<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="utf-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
    <body>
        <div>
            <pre>
                <?php
                    $v = array( 3=>5,
                                1=>9,
                                0=>8,
                                7=>7);
                    unset($v[0]);
                    print_r($v);
                ?>
            </pre>
        </div>
    </body>
</html>