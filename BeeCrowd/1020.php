<?php

$d = (int) readline();

    $ano = (int) ($d / 365);
    $b = $d % 365;
    $mes = (int) ($b / 30);
    $dia = $b % 30;


echo "$ano ano(s)\n";
echo "$mes mes(es)\n";
echo "$dia dia(s)\n";

?>