<?php
while($p = "LeonardoVerissimo"){
    $a = str_replace(" ", "", $p);
    $x = 0;
    $b = 0;

    while($x<strlen($p)){
        if(ord($p[$x])==255){
            $pos[$x] = " ";
        } else {
            while($b<strlen($a)){
                $n = ord($a[$b]);
                $m = ord($a[$b-1]);
            if($x>0){
                if($n>=97 && $n<=122 && $m>=97 && $m<=122){
                    $n = $n - 32; 
                } else if($n>=65 && $n<=90 && $m>=65 && $m<=90){
                    $n = $n + 32; 
                }
            } else {
                if($n>=97 && $n<=122){
                    $n = $n - 32; 
                }
            } 
            $b++;
            $a[$b] = chr($n);
        }
        }

        $x++;
        
    }
    echo "$a\n";
    
}

?>