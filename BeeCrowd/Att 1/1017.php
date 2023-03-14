<?php
$t = fgets(STDIN);
$vm = fgets(STDIN);
$f = number_format(($vm*$t)/12,3,".","");

echo "$f\n";
?>
