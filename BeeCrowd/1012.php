<?php

$x = explode(' ', fgets(STDIN));

$A = floatval($x[0]);
$B = floatval($x[1]);
$C = floatval($x[2]);




$c = number_format(3.14159 * $C * $C, 3, ".", "");
$at = number_format(($A*$C)/2.0, 3, ".", "");
$q = number_format($B*$B, 3, ".", "");
$t = number_format(($A+$B)*$C/2.0, 3, ".", "");
$r = number_format($A*$B, 3, ".", "");


echo "TRIANGULO: $at\n";
echo "CIRCULO: $c\n";
echo "TRAPEZIO: $t\n";
echo "QUADRADO: $q\n";
echo "RETANGULO: $r\n";







?>