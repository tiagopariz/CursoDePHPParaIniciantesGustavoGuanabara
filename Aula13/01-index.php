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
                echo "<h3>Contador progressivo de 1 até 10</h3>";
                for ($i = 1; $i <= 10; $i++) {
                    echo "$i ";
                }

                echo "<h3>Contador regressivo de 10 até 1</h3>";
                for ($i = 10; $i >= 1; $i--) {
                    echo "$i ";
                }

                echo "<h3>Contador progressivo de 0 a 50 de 5 em 5</h3>";
                for ($i = 0; $i <= 50; $i += 5) {
                    echo "$i ";
                }

                echo "<h3>Contador regressivo de 20 até 0 de 2 em 2</h3>";
                for ($i = 20; $i >= 0; $i -= 2) {
                    print "$i ";
                }

            ?>
        </div>
    </body>
</html>