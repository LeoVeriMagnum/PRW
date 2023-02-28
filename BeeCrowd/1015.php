<?php
$p1 = explode(' ', fgets(STDIN));
$p2 = explode(' ', fgets(STDIN));

$d = number_format(sqrt((($p2[0]-$p1[0])*($p2[0]-$p1[0]))+(($p2[1]-$p1[1])*($p2[1]-$p1[1]))),4,".","");

echo "$d\n";
?>
