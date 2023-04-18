<?php
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $op = $_GET['op'];

    switch($op){
        case "Somar":
            $r = $n1 + $n2;
            break;
        case "Subtrair":
            $r = $n1 - $n2;
            break;   
        case "Dividir":
            $r = $n1 / $n2;
            break;
        case "Multiplicar":
            $r = $n1 * $n2;
            break;     
    }

    echo "Resultado: $r";


?>