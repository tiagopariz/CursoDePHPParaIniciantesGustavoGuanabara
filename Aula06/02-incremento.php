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
                /* Este exercício pretende demonstrar o uso de operadores
                   de incremento e decremento */
                $atual = $_GET["aa"]; // Esta linha vai pegar o ano na URL
                echo "O ano atual é $atual e o ano anterior é ".--$atual; # Esta linha imprime na tela
            ?>
        </div>
    </body>
</html>