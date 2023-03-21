<?php
$n = explode(' ', readline());
$X = floatval($n[0]);
$Y = floatval($n[1]);

for($i=1; $i<=$Y; $i++){
    for($a=0; $a<$X; $a++){
        if($a = 0){
            echo "$i";
        } else
        if($a = $X-1){
            echo "\n";
        } else {
        echo " $i";
        }
    }
    $a=0;
}

?>