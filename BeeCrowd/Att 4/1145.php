<?php
$n = explode(' ', readline());
$X = floatval($n[0]);
$Y = floatval($n[1]);

for($i=1; $i<=$Y; $i++){
    echo $i;
    if(($i%$X)==0){
        echo "\n";
    } else {
        echo " ";
    }
}

?>