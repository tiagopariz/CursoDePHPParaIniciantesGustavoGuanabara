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

                $txt = "    Curso em Vídeo  ";
                $txt_ = "____Curso_em_Vídeo__";
                $semespacos = trim($txt);

                echo "$txt_($semespacos)<br />";
                echo "$txt_(".(strlen($txt))." caracteres) <br />";
                echo "$semespacos(".(strlen($semespacos))." caracteres sem os espaços) <br />";
            ?>
        </div>
    </body>
</html>