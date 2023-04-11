<?php
$n = readline();
$i = 1;

while($i<=$n){
    if($n%$i==0){
        echo "$i\n";
    }
    $i++;
}
?>