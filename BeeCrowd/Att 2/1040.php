<?php
$x =explode(' ', fgets(STDIN));

$A = floatval($x[0]);
$B = floatval($x[1]);
$C = floatval($x[2]);
$D = floatval($x[3]);
$media = ($A*2 + $B * 3 + $C * 4 + $D * 1)/10;
$media = number_format(intval($media*10)/10,1,".","");
echo "Media: $media\n";
if($media>=7){
    echo "Aluno aprovado.\n";
} else if ($media <5){
    echo "Aluno reprovado.\n";
} else {
    echo "Aluno em exame.\n";
    $ne = floatval(fgets(STDIN));
    echo "Nota do exame: ".number_format($ne,1,".","")."\n";
    $media = number_format(($media + $ne)/2,1,".","");
    if($media >= 5){
        echo "Aluno aprovado.\n";
    } else {
        echo "Aluno reprovado.\n";
    }
    echo "Media final: $media\n";
}
?>