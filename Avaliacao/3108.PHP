<?PHP
$N = readline();
$i = 0;

while($i<$N){
    //$p = array();
    $p = explode(" ", readline());
    $p = array_reverse($p);
    $p = implode(" ", $p);
    
    $p = str_replace('P', 'B', $p);
    $p = str_replace('F', 'V', $p);
    $p = str_replace('T', 'D', $p);
    $p = str_replace('R', 'L', $p);
    $p = str_replace('J', 'Z', $p);
    $p = str_replace('X', 'S', $p);
    /*
    $t = count($p);
    $a = '';
    for($b = 0;$b<$t;$b++){
        $a .= $p[$b]." ";
    }
    $a = trim($a);
    */
    echo "$p\n";
    $i++;
}

?>