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
                $numero = isset($_GET["numero"]) ? $_GET["numero"] : 1;
                echo "<h1>Analisando o número $numero ...</h1>";
                $multiplos = "";
                $quantidadeMultiplos = 0;
                for ($i = 1; $i <= $numero; $i++) {
                    if (($numero % $i) == 0) {
                        $multiplos .= "$i ";
                        $quantidadeMultiplos++;
                    }
                }
                echo "<h2>Valore múltiplos: $multiplos</h2>";
                echo "<h2>Total de múltiplos: $quantidadeMultiplos</h2>";
                echo "<                                                               h2>Resultado: $numero ".($quantidadeMultiplos == 2 ? " é primo" : " não é primo")."</h2>";
            ?>
            <a href="javascript:history.go(-1)">Voltar</a>
        </div>
    </body>
</html>