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
                $letra_C = "C";
                $cod_C = ord($letra_C);
                print("A letra $letra_C tem o código $cod_C<br />");

                $letra_c = "c";
                $cod_c = ord($letra_c);
                print("A letra $letra_c tem o código $cod_c");
            ?>
        </div>
    </body>
</html>