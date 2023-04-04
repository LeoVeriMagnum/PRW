<?php

#Sequência IJ 1

$j = 60;
for($i = 1;true;true){
    echo "I=$i J=$j\n";
    $j -= 5;
    $i += 3;
    if($j<0){
        break;
    }
}

?>