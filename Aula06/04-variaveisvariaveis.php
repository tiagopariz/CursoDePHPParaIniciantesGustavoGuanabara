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
                $x = "abc";
                $$x = "def";
                echo "O conteudo da variável X é $x <br />";
                echo "O conteudo da variável criada recebeu é $abc <br />";
            ?>
        </div>
    </body>
</html>