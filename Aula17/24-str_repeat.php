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
                $txt = str_repeat("Php", 5);
                print("O texto gerado foi $txt <br />");
                print(str_repeat("-", 20));
            ?>
        </div>
    </body>
</html>