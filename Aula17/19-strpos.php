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
                $frase = "Estou aprendendo PHP";
                $pos = strpos($frase, "PHP");
                echo "$frase <br />";
                echo "A string PHP foi encontrada na posição $pos";
            ?>
        </div>
    </body>
</html>