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
                    $v = array(2=>"A",5=>"J",0=>"M",3=>"X",4=>"K");
                    print_r($v);
                   /* sort($v);
                    print_r($v);
                    rsort($v);
                    print_r($v);
                    asort($v);
                    print_r($v);
                    arsort($v);
                    print_r($v);*/
                    ksort($v);
                    print_r($v);
                    krsort($v);
                    print_r($v);
                ?>
            </pre>
        </div>
    </body>
</html>