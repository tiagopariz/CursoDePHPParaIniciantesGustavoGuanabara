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
                while ($c <= 15) {
                    echo $c."<br />";
                    $c += 1;
                }

                while ($c >= 1) {
                    echo $c."<br />";
                    $c--;
                }

                while ($c <= 15) {
                    echo $c."<br />";
                    $c += 2;
                }
            ?>
        </div>
    </body>
</html>