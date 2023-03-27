<?php
while($p = "Leonardo verissimo"){
    for($x = 0; $x < strlen($p);$x++){

        if((ord($p[$x]))== 255){
            $p[$x] = " ";
            $x++;
        } else {

        //$a = str_replace(" ", "", $p);

    $n = intval(ord($p[$x]));
    
    if($x>0){
        for($b=0;((ord($p[$x-$b])==255)&&($b<=$x));$b++){
            
        }

        $m = intval(ord($p[$x-$b-1]));

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
    $p[$x] = chr($n);
    }
}
echo "$p\n";

}

?>