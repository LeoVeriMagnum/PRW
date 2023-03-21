<?php 
$n = readline();

$C = 0;
$S = 0;
$R = 0;

for($i=1;$i<=$n;$i++){
$x = explode(' ', readline());
$q = floatval($x[0]);
$t = floatval($x[1]);

switch($t){
    case "C":
        $C += $q;
        break;
    case "S":
        $S += $q;
        break;
    case "R":
        $R += $q;
        break;
}
}


$tt = $C + $S + $R;

if($tt == 0){
    echo "Total: $tt cobaias\n";
    echo "Total de coelhos: $C\n";
    echo "Total de ratos: $R\n";
    echo "Total de sapos: $S\n";
    echo "Percentual de coelhos: 0 %\n";
    echo "Percentual de ratos: 0 %\n";
    echo "Percentual de sapos: 0 %\n";
} else {

echo "Total: $tt cobaias\n";
echo "Total de coelhos: $C\n";
echo "Total de ratos: $R\n";
echo "Total de sapos: $S\n";
echo "Percentual de coelhos: " . number_format(($C/$tt)*100, 2, ".","") . " %\n";
echo "Percentual de ratos: " . number_format(($R/$tt)*100, 2, ".","") . " %\n";
echo "Percentual de sapos: " . number_format(($S/$tt)*100, 2, ".","") . " %\n";
}
?>