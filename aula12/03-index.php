<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="utf-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="tabuada.php">
        Número : <select name="val">
                     <?php
                        $i= 1;
                        while($i <= 10){
                            echo "<option value='$i'>$i</option>";
                            $i++;
                        }
                    ?>
                </select>
        <input type="submit" value="Tabuada" class="botao"/>
    </form>
</div>
</body>
</html>