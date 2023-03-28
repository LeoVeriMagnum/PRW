<?php
    while(true){
        $x = explode(" ", trim(readline()));
        $a = strval($x[0]);
        $b = strval($x[1]);
        $p = str_replace(strval($a), "", $b);

        if ($a == 0 && $b == 0) {
            break;
        }
        
        $sem_z = preg_replace("/0+/", "0", $p);
        
        if($sem_z == "0"){
            echo "$sem_z\n";
        } 
        if ($sem_z == "0"){
            echo intval($p) . "\n";
        }

    }
    
?>