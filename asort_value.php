<?php
function asort_value(array $arr){
    if(sizeof($arr) <= 1){
        return $arr;
    }

    $first_value = $arr[array_key_first($arr)];
    $left =[];
    $right = [];

    foreach($arr as $key=>$value){
        if($first_value===$value){
            continue;
        }

        if($first_value < $value){
            $right[$key] = $value;
        }else{
            $left[$key] = $value;
        }
    }

    $left = asort_value($left);
    $right = asort_value($right);
    return $left + [array_key_first($arr) => $first_value] + $right;
}
$x = [
    "Dophia" => "31",
    "Bacob" => "41",
    "Ailliam" => "39",
    "Camesh" => "40",
];
print_r(asort_value($x));
