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
                $frase = "Estou aprendendo PHP no curso em vídeo PHP";
                $cont = substr_count($frase, "PHP");
                print("PHP encontrado $cont vezes");
            ?>
        </div>
    </body>
</html>