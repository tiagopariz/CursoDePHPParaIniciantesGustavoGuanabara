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
                // Procedimento sem retorno de valor
                function soma($a, $b) {
                    $s = $a + $b;
                    echo "<p>A soma vale $s</p>";
                }
                soma(3,4);
                soma(8,2);
                $x = 9;
                $y = 15;
                soma($x,$y)
            ?>
        </div>
    </body>
</html>