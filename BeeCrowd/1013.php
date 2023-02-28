<?php

$v = explode(" ", fgets(STDIN));



$MaiorAB = number_format(($v[0]+$v[1]+abs($v[0]-$v[1]))/2.0,0,".","");
$MaiorAB = number_format(($MaiorAB+$v[2]+abs($MaiorAB-$v[2]))/2.0,0,".","");

echo "$MaiorAB eh o maior\n";


?>