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
                $c = 1;
                do {
                    echo "$c ";
                    $c++;
                } while ($c <= 10);

                echo "<br />";

                do {
                    echo "$c ";
                    $c += 2;
                } while ($c <= 20);

            ?>
        </div>
    </body>
</html>