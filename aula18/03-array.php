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
                <table border="1">
                    <tr>
                <?php
                $c = range(5, 20, 2);
                foreach ($c as $v){
                    echo "<td>$v</td>";
                }
                ?>
                    </tr>
                </table>
            </pre>
        </div>
    </body>
</html>