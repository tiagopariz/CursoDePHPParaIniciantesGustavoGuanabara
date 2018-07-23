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
                // Passagem de parâmetro por valor
                function testeValor($x) {
                    $x += 2;
                    echo "<p>O valor de X é $x</p>";
                }

                $a = 3;
                testeValor($a);
                echo "<p>O valor de A é $a</p>";

                function testeReferencia(&$x) {
                    $x += 2;
                    echo "<p>O valor de X é $x";
                }

                $a = 3;
                testeReferencia($a);
                echo "<p>O valor de A é $a</p>";
            ?>
        </div>
    </body>
</html>