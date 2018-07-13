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
                $a = 3;
                $b = $a;
                $b += 5;
                echo "A variável A vale $a <br />";
                echo "A variável B vale $b <br />";

                // por referência
                $c = 3;
                $d = &$c;
                $d += 5;
                echo "A variável C (Origem) vale $c <br />";
                echo "A variável D (Referenciada) vale $d <br />";
            ?>
        </div>
    </body>
</html>