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
                $nome = "tiago pAriz";
                $nome2 = ucfirst(strtolower($nome));
                echo "Seu nome é $nome2";
            ?>
        </div>
    </body>
</html>