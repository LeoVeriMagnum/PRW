<?php


$x = explode(' ', readline());
$a = $x[0];
$r = 0;

for($i=1; true; $i++)  {
 if ($x[$i] > 0) {
    $b = $x[$i];
    break;
 }
}

for($i = 0; $i<=$b-1; $i++){
    $r += $a+$i;
}

echo $r."\n";


?>