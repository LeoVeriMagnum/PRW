<?php
$x =explode(' ', fgets(STDIN));
$A = floatval($x[0]);
$B = floatval($x[1]);
$C = floatval($x[2]);
$D = floatval($x[3]);

$H1 = $B + ($A * 60);
$H2 = $D + ($C * 60);

if($H1 < $H2){
    $DURACAOM = ($H2-$H1);
} else {
    $DURACAOM = (1440 - $H1 + $H2);
}

$DURACAOH = intval($DURACAOM/60);
$DURACAOM = $DURACAOM % 60;

echo "O JOGO DUROU $DURACAOH HORA(S) E $DURACAOM MINUTO(S)\n";
?>