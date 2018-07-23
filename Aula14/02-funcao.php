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
                // Função que retorna valor
                function soma($a, $b) {
                    $s = $a + $b;
                    return $s;
                }

                $x = 3;
                $y = 4;
                $r = soma($x, $y);
                echo "<p>A soma entre $x e $y é igual a $r</p>";

                $x = -4;
                $y = 8;
                $r = soma($x, $y);
                echo "<p>A soma entre $x e $y é igual a $r</p>";

                function concatena($a, $b) {
                    return $a.$b;
                }
                $w = "Tiago ";
                $k = "Pariz";
                $p = concatena($w, $k);
                echo "<p>Meu nome é $p</p>";
            ?>
        </div>
    </body>
</html>