<?php
$n = explode(' ', readline());
$X = floatval($n[0]);
$Y = floatval($n[1]);

for($i=1; $i<=$Y; $i++){
    for($a=0; $a<$X; $a++){
        echo "$i";
        if($a = $X-1){
            echo "\n";
        }
    }
    $a=0;
}

?>