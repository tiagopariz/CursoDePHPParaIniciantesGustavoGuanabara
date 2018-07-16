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
                $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
                $final = isset($_GET["final"]) ? $_GET["final"] : 0;
                $incremento = isset($_GET["incremento"]) ? $_GET["incremento"] : 0;
                $atual = $inicio;

                echo "<strong>Início: $inicio</strong><br />";
                echo "<strong>Final: $final</strong><br />";
                echo "<strong>Incremento: $incremento</strong><br />";
                echo "<hr />";

                if ($inicio <= $final) {
                    while ($atual <= $final) {
                        echo "$atual <br />";
                        $atual += $incremento;
                    }
                }
                else {
                    while ($atual >= $final) {
                        echo "$atual ";
                        $atual -= $incremento;
                    }
                }
            ?>
            <a href="03-exercicio.html">Voltar</a>
        </div>
    </body>
</html>