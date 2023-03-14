<?php

$nv = readline();
$sf = readline();
$tv = readline();

$SALARIO = number_format($sf+($tv*0.15),2,".","");

echo "TOTAL = R$ $SALARIO\n";


?>