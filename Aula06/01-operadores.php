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
                $preco = $_GET["p"];
                echo "O preço do produto é R$ $preco<br />";
                //$preco = $preco + ($preco * 10 / 100);
                $preco += $preco * 10 / 100;
                echo "O novo preço com 10% de aumento será R$ ".number_format($preco, 2)."<br />";
                $preco = $_GET["p"];
                $preco -= $preco * 10 / 100;
                echo "O novo preço com 10% de desconto será R$ ".number_format($preco, 2)."<br />";
            ?>
        </div>
    </body>
</html>