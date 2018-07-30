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
                $txt = "Curso em Vídeo";
                $tamanho = strlen($txt);

                echo "$txt($tamanho caracteres)";
            ?>
        </div>
    </body>
</html>