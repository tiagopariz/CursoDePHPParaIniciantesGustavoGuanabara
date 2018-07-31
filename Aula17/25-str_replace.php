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
                $frase = "Gosto de estudar Matemática!!!";
                $novafrase = str_replace("Matemática", "PHP", $frase);
                echo "$novafrase <br />";

                $novafrase = str_ireplace("matemática", "PHP", $frase);
            echo "$novafrase";
            ?>
        </div>
    </body>
</html>