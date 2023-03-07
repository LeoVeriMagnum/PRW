<?php
$x =explode(' ', fgets(STDIN));

$A = floatval($x[0]);
$B = floatval($x[1]);

if($A<$B){
    $d = $B-$A;
 echo "O JOGO DUROU $d HORA(S)\n";
} else if($A==$B){
    $d = 24;
    echo "O JOGO DUROU $d HORA(S)\n";
} else if($A>$B){
    $d = intval((24-$A)+$B) ;
    echo "O JOGO DUROU $d HORA(S)\n";
}
?>