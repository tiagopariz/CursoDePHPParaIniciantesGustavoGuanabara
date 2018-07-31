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
                $site = "Curso em vídeo";
                $sub = substr($site, 0, 5);
                echo "$sub <br />";

                $sub = substr($site, 7);
                echo "$sub <br />";

                $sub = substr($site, -5, 2);
                echo "$sub <br />";

                $sub = substr($site, 9, 5);
                echo "$sub <br />";
            ?>
        </div>
    </body>
</html>