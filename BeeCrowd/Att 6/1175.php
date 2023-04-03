<?php
$n = 0;
$p = array();
while($n<20){
    $n++;
    $p[$n] = intval(trim(readline()));
}
$p = array_reverse($p);
$n = 0;
while($n<20){
    echo "N[$n] = " . $p[$n] . "\n";
    $n++;
}?>
