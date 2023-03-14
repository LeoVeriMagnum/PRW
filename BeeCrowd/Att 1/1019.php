<?php

$d = (int) readline();

    $horas = (int) ($d / 3600);
    $b = $d % 3600;
    $minutos = (int) ($b / 60);
    $segundos = $b % 60;


echo "$horas",":$minutos",":$segundos\n";

?>