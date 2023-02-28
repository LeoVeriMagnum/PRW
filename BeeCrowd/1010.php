<?php

$peca1 = explode(" ", fgets(STDIN));
$peca2 = explode(" ", fgets(STDIN));


$TOTAL = number_format($peca1[1] * $peca1[2] + $peca2[1] * $peca2[2],2,".","");

echo "VALOR A PAGAR: R$ $TOTAL\n";


?>