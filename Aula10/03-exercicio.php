<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP</title>
    </head>
    <body>
        <div>
            <?php
                $uf = isset($_GET["uf"]) ? $_GET["uf"] : "";
                switch ($uf) {
                    case "AC":
                    case "AM":
                        $r = "Norte";
                        break;
                    case "RS":
                    case "SC":
                    case "PR":
                        $r = "Sul";
                        break;
                    case "RN":
                        $r = "Nordeste";
                        break;
                    default:
                        $r = "[estado inválido]";
                }
                echo "Você mora na Região $r <br />";
            ?>
            <a href="javascript:history.go(-1)">Voltar</a>
        </div>
    </body>
</html>