<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP</title>
        <style>
            h2 {
                font: 15pt Arial;
                color: #171559;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
                $v1 = $_GET["x"];
                $v2 = $_GET["y"];
                echo "<h2>Valores recebidos: $v1 e $v2</h2>";
                echo "O valor absoluto de $v2 é ".abs($v2)."<br />";
                echo "O valor de $v1<sup>$v2</sup> é ".pow($v1, $v2)."<br />";
                echo "A raiz de $v1 é ".sqrt($v1)."<br />";
                echo "O valor de $v2 arrendondado é ".round($v2)."<br />";
                echo "A de parte inteira de $v2 é ".intval($v2)."<br />";
                echo "O valor de $v1 em moeda é R$ ".number_format($v1, 2, ",", ".")."<br />";
            ?>
        </div>
    </body>
</html>