<?php
$vm = fgets(STDIN);
$d = fgets(STDIN);
$cm = fgets(STDIN);

$th = number_format($d/$vm,2,".","");
$tc = number_format($d/$cm,2,".","");

echo "Total horas: $th\n";
echo "Total combustivel: $tc\n";




?>