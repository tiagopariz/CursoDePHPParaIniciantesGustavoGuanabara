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
                $valor = $_GET["v"];
                $rq = sqrt($valor);
                echo "O valor enviado foi $valor <br />";
                echo "A raiz de $valor é igual a ".number_format($rq, 2);
            ?>
            <br />
            <a href="01-exercicio.html">Voltar</a>
        </div>
    </body>
</html>