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
                $c = 20;

                do {
                    echo "$c ";
                    $c--;
                } while ($c >= 10);

                echo "<br />";

                do {
                    echo "$c ";
                    $c -= 2;
                } while ($c >= 1);

            ?>
        </div>
    </body>
</html>