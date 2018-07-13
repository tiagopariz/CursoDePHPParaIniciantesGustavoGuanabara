<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="../../_css/estilo.css"/>
      <meta charset="UTF-8"/>
      <title>Curso de PHP</title>
    </head>
    <body>
        <div>
            <?php
                $nome = "Ana";
                $idade = 18;
                echo $nome." tem ".$idade." anos!<br />";
                echo "$nome tem $idade anos!<br />";
                echo '$nome tem $idade anos!';
            ?>
        </div>
    </body>
</html>