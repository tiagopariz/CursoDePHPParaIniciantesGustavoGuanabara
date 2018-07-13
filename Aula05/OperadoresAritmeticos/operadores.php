<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="../../_css/estilo.css"/>
      <meta charset="UTF-8"/>
      <title>Operações aritméticas</title>
    </head>
    <body>
        <div>
            <?php
//                $n1 = 3;
//                $n2 = 2;
//                $m = $n1 + $n2 / 2; Erro de precedencia
//                http://localhost/../operadores.php?a=5&b=8

                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                $m = ($n1 + $n2) / 2;
                echo "<h2>Valores recebidos: $n1 e $n2</h2>";
                echo "A soma vale ".($n1 + $n2)."<br />";
                echo "A subtração vale ".($n1 - $n2)."<br />";
                echo "A multiplicação vale ".($n1 * $n2)."<br />";
                echo "A divisão vale ".($n1 / $n2)."<br />";
                echo "O módulo vale ".($n1%$n2)."<br />";
                echo "A média vale $m<br />";
            ?>
        </div>
    </body>
</html>