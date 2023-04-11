<?php
$L = readline();
$M[4][4] = array();
for($l = 0; $l<5; $l++){
    for($c = 0; $c<5; $c++){
        $M[$l][$c] = floatval(fgets(STDIN));
        $M[$l][$c] = number_format($M[$l][$c],2,".","");
        if($M[$l][$c]>=$L){
            echo "Valor encontrado: ".$M[$l][$c]. " Linha: $l Coluna: $c\n";
        }
    }
}
?>

