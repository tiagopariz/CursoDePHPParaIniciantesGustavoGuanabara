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
                include "funcoes.php";
//              include "funcoes2.php";
//              require "funcoes3.php";
//              include_once "funcoes.php";
//              require_once "funcoes3.php";
                echo "<h1>Testando novas funções</h1>";
                ola();
                mostraValor(4);
                echo "<h2>Finalizando o programa...</h2>";
            ?>
        </div>
    </body>
</html>