<?php

#Quadrado e ao cubo

$n = intval(trim(readline()));

for($i = 1; $i<=$n;$i++){
    $q = $i*$i;
    $c = $i*$i*$i;

    echo "$i $q $c\n";
}
?>