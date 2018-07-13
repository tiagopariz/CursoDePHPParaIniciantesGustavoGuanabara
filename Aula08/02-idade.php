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
                $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não informado]";
                $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
                $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem sexo]";
                $idade = date("Y") - ($ano == "" ? 0 : $ano);
                echo "$nome é $sexo e tem $idade anos. <br />";
            ?>
            <br />
            <a href="02-exercicio.html">Voltar</a>
        </div>
    </body>
</html>