<?php
$x =explode(' ', fgets(STDIN));

$A = floatval($x[0]);
$B = floatval($x[1]);
$C = floatval($x[2]);

if($A>=$B+$C){
 echo "NAO FORMA TRIANGULO\n";
} else {
    if($A**2 == $B**2+$C**2){
    echo "TRIANGULO RETANGULO\n";
}  if($A**2 >($B**2+$C**2)){
    echo "TRIANGULO OBTUSANGULO\n";
} if($A**2 <($B**2+$C**2)){
    echo "TRIANGULO ACUTANGULO\n";
}if($A == $B && $B == $C & $C == $A){
    echo "TRIANGULO EQUILATERO\n";
} if($A != $B || $B != $C || $C!= $A){
    echo "TRIANGULO ISOSCELES\n";
}}

?>