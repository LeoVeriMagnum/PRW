<?php

while(true){
  $k = readline();
    if($k == 0){
        break;
    } 
    $pd = explode(' ',readline());
    $n = $pd[0];
    $m = $pd[1];
  $i = 0;
    while($i<$k){
        
        $c = explode(' ',readline());
        $x = $c[0];
        $y = $c[1];
        
        if(($x == $n)||($y==$m)){
            echo "divisa\n";
        } else {
             if(($x>$n)&&($y>$m)){
                echo "NE\n";
             } else if(($x<$n)&&($y>$m)){
                echo "NO\n";
             } else if(($x<$n)&&($y<$m)){
                echo "SO\n";
            } else if(($x>$n)&&($y<$m)){
                echo "SE\n";
            }
       }
       $i++;
    }
    }
?>