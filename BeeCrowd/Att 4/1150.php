<?php
$x = 3;
$n = 1;

for($i=0; true; $i++){
    $z = 20;
    if($z > $x){
        break;
    }
}

for($a = $x+1; true; $a++){
    $x += $a;
    $n++;
    if($x>$z){
        break;
    }
}

echo "$n\n"

?>