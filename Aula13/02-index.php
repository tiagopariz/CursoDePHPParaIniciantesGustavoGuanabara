<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="../_css/estilo.css"/>
      <meta charset="UTF-8"/>
      <title>Curso de PHP</title>
    </head>
    <body>
        <div>
            <form method="get" action="02-tabuada.php">
                <select name="num">
<!--                    <option>1</option>-->
<!--                    <option>2</option>-->
<!--                    <option>3</option>-->
                    <?php
                        for ($i = 1; $i <= 10;$i++) {
                            echo "<option>$i</option>";
                        }
                    ?>
                </select>
                <input type="submit" value="Tabuada" />
            </form>
        </div>
    </body>
</html>