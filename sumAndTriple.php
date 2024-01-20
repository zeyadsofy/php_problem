<?php
function sum_triple($num1,$num2){
    if($num1===$num2){
        return ($num1+$num2)*3;
    }
    else{
        return $num1+$num2;
    }
}

echo sum_triple(1,2);
echo "<br>";
echo sum_triple(2,3);
echo "<br>";
echo sum_triple(2,2);