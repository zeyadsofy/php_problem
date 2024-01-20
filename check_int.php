<?php
function check_int($num){
    if(abs($num-100)<=10 || abs($num-200)<=10){
        return true;
    }
    return false;
}

var_dump(check_int(103));
echo "<br>";
var_dump(check_int(89));
echo "<br>";
var_dump(check_int(90));