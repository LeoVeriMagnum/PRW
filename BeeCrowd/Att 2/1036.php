<?php

$x = explode(' ', fgets(STDIN));

$A = floatval($x[0]);
$B = floatval($x[1]);
$C = floatval($x[2]);

if($A <= 0){
    echo "Impossivel calcular\n";
} else{

$delta = ($B*$B) - (4*$A * $C);
if($delta<0){
    echo "Impossivel calcular\n";
} else {

$R1 = number_format((((-1*$B) + sqrt($delta)) / (2*$A)),5,".","");
$R2 = number_format((((-1*$B) - sqrt($delta)) / (2*$A)),5,".","");

echo "R1 = $R1\n";
echo "R2 = $R2\n";
}
}
?>