<?php

$d = readline();
$n = $d;

    $notasC = (int) ($d / 100);
    $a = $d % 100;

    $notasCi = (int) ($a / 50);
    $b = $a % 50;

    $notasV = (int) ($b / 20);
    $c = $b % 20;

    $notasD = (int) ($c / 10);
    $d = $c % 10;

    $notasCin= (int) ($d / 5);
    $e = $d % 5;

    $notasDo = (int) ($e / 2);
    $f = $e % 2;

    $notasU = (int) ($f / 1);
    $g = $f % 1;




echo "$n\n";
echo "$notasC nota(s) de R$ 100,00\n";
echo "$notasCi nota(s) de R$ 50,00\n";
echo "$notasV nota(s) de R$ 20,00\n";
echo "$notasD nota(s) de R$ 10,00\n";
echo "$notasCin nota(s) de R$ 5,00\n";
echo "$notasDo nota(s) de R$ 2,00\n";
echo "$notasU nota(s) de R$ 1,00\n";
?>