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
                $t = "<p>Aqui temos um texto gigante que vai mostrar o funcionamento da função wordwrap</p>";

                $r = wordwrap($t, 10, "<br />\n", false);
                echo $r;

                $r = wordwrap($t, 10, "<br />\n", true);
                echo $r;

            ?>
        </div>
    </body>
</html>