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
                $semespacosleft = ltrim($txt);

                echo "$txt_($semespacosleft)<br />";
                echo "$txt_(".(strlen($txt))." caracteres)<br />";
                echo "$semespacosleft(".(strlen($semespacosleft))." caracteres sem os espaços à esquerda)<br />";

            ?>
        </div>
    </body>
</html>