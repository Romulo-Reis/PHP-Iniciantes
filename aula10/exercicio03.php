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
            $estado = isset($_GET["estado"])?$_GET["estado"]:"RJ";
            switch ($estado){
                case "AM":
                case "RR":
                case "AP":
                case "PA":
                case "TO":
                case "RO":
                case "AC":
                    $r="Região Norte";
                    break;
                case "MA":
                case "PI":
                case "CE":
                case "RN":
                case "PE":
                case "PB":
                case "SE":
                case "AL":
                case "BA":
                    $r ="Região Nordeste";
                    break;
                case "MT":
                case "MS":
                case "GO":
                case "DF":
                    $r = "Região Centro-Oeste";
                    break;
                case "SP":
                case "RJ":
                case "ES":
                case "MG":
                    $r = "Região Sudeste";
                    break;
                case "PR":
                case "RS":
                case "SC":
                    $r = "Região Sul";
            }
            echo "Você mora na <span class='foco'>$r</span>.";
        ?>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>