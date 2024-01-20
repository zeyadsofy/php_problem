<?php
function dsort_value($arr){
    if(sizeof($arr)<=1){
        return $arr;
    }

    $first_value = $arr[array_key_first($arr)];
    $left=[];
    $right=[];

    foreach($arr as $key=>$value){
        if($first_value===$value){
            continue;
        }
        if($first_value < $value){
            $left[$key]=$value;
        }
        else{
            $right[$key]=$value;
        }
    }

    $left = dsort_value($left);
    $right = dsort_value($right);

    return $left + [array_key_first($arr) => $first_value] + $right;
}

$x = [
    "Dophia" => "31",
    "Bacob" => "41",
    "Ailliam" => "39",
    "Camesh" => "40",
];
print_r(dsort_value($x));