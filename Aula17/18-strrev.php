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
                $nome = "tiago pariz";
                $nome2 = strrev($nome);
                print("Seu nome é $nome2");
            ?>
        </div>
    </body>
</html>