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
                $frase = "Eu vou estudar PHP";
                $count = str_word_count($frase, 0);
                print "<p>$frase($count palavras)</p>";

                // Cria um array
                $array1 = str_word_count($frase, 1);
                print "<p>".print_r($array1)."</p>";

                // Cria um array com posições
                $array2 = str_word_count($frase, 2);
                print "<p>".print_r($array2)."</p>";
            ?>
        </div>
    </body>
</html>