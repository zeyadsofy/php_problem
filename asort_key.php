<?php
function asort_key($arr){
    if(sizeof($arr)<=1){
        return $arr;
    }

    $first_key = array_key_first($arr);
    $left=[];
    $right=[];

    foreach($arr as $key=>$value){
        if($first_key===$key){
            continue;
        }
        if($first_key < $key){
            $right[$key] = $value;
        }
        else{
            $left[$key] = $value;
        }
    }

    $left = asort_key($left);
    $right = asort_key($right);

    return $left + [$first_key => $arr[$first_key]] + $right;
}

$x = [
    "Dophia" => "31",
    "Bacob" => "41",
    "Ailliam" => "39",
    "Camesh" => "40",
];
print_r(asort_key($x));