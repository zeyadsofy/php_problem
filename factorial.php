<?php
function factorial($num){
    $x=1;
    for($i=1;$i<=$num;$i++){
        $x *= ($i);
    }
    return $x;
}
echo factorial(5);