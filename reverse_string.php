<?php
function revers_str($str){
    $x="";
    for($i=strlen($str)-1;$i>=0;$i--){
        $x.=$str[$i];
    }
    return $x;
}
echo revers_str("1234");