<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="../_css/estilo.css"/>
      <meta charset="UTF-8"/>
      <title>Curso de PHP</title>
    </head>
    <body>
        <div>
            <form method="GET" action="03-tabuada.php">
                Número:
                <select name="numero">
                    <?php
                    $tabuada = 1;
                    do {
                        echo "<option value='$tabuada'>$tabuada</option>";
                        $tabuada++;
                    } while ($tabuada <= 10)
                    ?>
                </select>
                <input type="submit" value="Tabuada" id="submit"/>
            </form>
        </div>
    </body>
</html>