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
                $nota1 = $_GET["n1"];
                $nota2 = $_GET["n2"];
                $m = ($nota1 + $nota2) / 2;
                echo "A media entre $nota1 e $nota2 é $m <br />";
                // $sit = ($m < 6) ? "REPROVADO" : "APROVADO";
                // echo "A situacao do aluno é $sit <br />";
                echo "A situacao do aluno é ".($m < 6 ? "REPROVADO" : "APROVADO")."<br />";
            ?>
        </div>
    </body>
</html>