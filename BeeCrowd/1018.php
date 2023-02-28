<?php
$d = 576;
$n = $d;


    $a = d%;
    $d = $d - ($a * 100);
    $b = $d%50;
    $d = $d - ($b * 50);
    $c = $d%20;
    $d = $d - ($c * 50);
    $e = $d%10;
    $d = $d - ($e * 10);
    $f = $d%5;
    $d = $d - ($f * 5);
    $g = $d%2;
    $d = $d - ($g * 2);
    $h = $d%1;
    $d = $d - ($h * 1);

echo "$n\n";
echo "$a nota(s) de R$ 100,00\n";
echo "$b nota(s) de R$ 50,00\n";
echo "$c nota(s) de R$ 20,00\n";
echo "$e nota(s) de R$ 10,00\n";
echo "$f nota(s) de R$ 5,00\n";
echo "$g nota(s) de R$ 2,00\n";
echo "$h nota(s) de R$ 1,00\n";
?>