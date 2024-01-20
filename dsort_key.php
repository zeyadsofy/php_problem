<?php

function dsort_key($arr){
    if(sizeof($arr)<=1){
        return $arr;
    }

    $first_key = array_key_first($arr);
    $left=[];
    $right=[];

    foreach($arr as $key=>$value){
        if($first_key === $key){
            continue;
        }
        if($first_key < $key){
            $left[$key] = $value;
        }
        else{
            $right[$key] = $value;
        }
    }

    $left = dsort_key($left);
    $right = dsort_key($right);

    return $left + [$first_key => $arr[$first_key]] + $right;
}
$x = [
    "Dophia" => "31",
    "Bacob" => "41",
    "Ailliam" => "39",
    "Camesh" => "40",
];
print_r(dsort_key($x));