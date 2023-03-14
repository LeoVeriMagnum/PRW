<?php

$a = explode(' ', readline());
$a = explode(' ',"Dia 5");
$diai = floatval($a[1]);
$b = explode(' ', readline());
$b = explode(' ', "08 : 12 : 23");
$hi = floatval($b[0]);
$mi = floatval($b[2]);
$si = floatval($b[4]);

$c = explode(' ', readline());
$c = explode(' ', "Dia 9");
$diaf = floatval($c[1]);
$d = explode(' ', readline());
$d = explode(' ', "06 : 13 : 23");
$hf = floatval($d[0]);
$mf = floatval($d[2]);
$sf = floatval($d[4]);


$sIni = ($diai*86400) + ($hi*3600) + ($mi * 60) + $si;
$sFin = ($diaf*86400) + ($hf*3600) + ($mf * 60) + $sf;

$duracao = $sFin - $sIni;

$dT = intval($duracao/86400);

$hT = intval(($duracao%86400)/3600);

$mT = intval((($duracao%86400)%3600)/60);

$sT = intval((($duracao%86400)%3600)%60);

echo "$dT dia(s)\n";
echo "$hT hora(s)\n";
echo "$mT minuto(s)\n";
echo "$sT segundo(s)\n";
?>
