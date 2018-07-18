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
                $numero = isset($_GET["numero"]) ? $_GET["numero"] : 1;
                $contador = 1;
                echo "<h1>Mostrando a tabuada de $numero</h1>";
                do {
                    echo "$numero X $contador = ".($numero * $contador)."<br />";
                    $contador++;
                } while ($contador <= 10);
            ?>
        </div>
    </body>
</html>