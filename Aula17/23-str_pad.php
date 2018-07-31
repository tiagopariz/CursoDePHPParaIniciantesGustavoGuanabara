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
                $nome = "Tiago";
                $novo = str_pad($nome, 30, "_", STR_PAD_RIGHT);
                print("O $novo Pariz <br />");

                $novo = str_pad($nome, 30, "_", STR_PAD_BOTH);
                print("O $novo Pariz <br />");

                $novo = str_pad($nome, 30, "_", STR_PAD_LEFT);
                print("O $novo Pariz <br />");
            ?>
        </div>
    </body>
</html>