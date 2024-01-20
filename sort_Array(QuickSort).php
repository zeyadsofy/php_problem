<?php 

function asort_array_by_key(array $arr): array {
    if (sizeof($arr) <= 1) {
        return $arr;
    }
    $first_key = array_key_first($arr);
    $left = [];
    $right = [];
    foreach ($arr as $key => $value) {
        if ($key === $first_key) {
            continue;
        }
        if ($key < $first_key) {
            $left[$key] = $value;
        } else {
            $right[$key] = $value;
        }
    }
    $left = asort_array_by_key($left);
    $right = asort_array_by_key($right);


    return $left + [$first_key => $arr[$first_key]] + $right;
}


function dsort_array_by_key(array $arr): array {
    if (sizeof($arr) <= 1) {
        return $arr;
    }


    $first_key = array_key_first($arr);
    $left= [];
    $right = [];


    foreach ($arr as $key => $value) {
        if($first_key === $key){
            continue;
        }
        if ($key > $first_key) {
            $left[$key] = $value;
        }else{
            $right[$key] = $value;
        }
    }


    $left = dsort_array_by_key($left);
    $right = dsort_array_by_key($right);


    return $left + [$first_key => $arr[$first_key]] + $right;
}


function asort_array_by_value(array $arr) : array {
    if(sizeof($arr) <= 1){
        return $arr;
    }


    $first_value = $arr[array_key_first($arr)];
    $left = [];
    $right = [];


    foreach ($arr as $key => $value) {
        if($first_value === $value){
            continue;
        }
        if($first_value < $value){
            $right[$key] = $value;
        }else{
            $left[$key] = $value;
        }
    }


    $left = asort_array_by_value($left);
    $right = asort_array_by_value($right);


    return $left + [array_key_first($arr) => $first_value] + $right;
}


function dsort_array_by_value(array $arr) : array {
    if(sizeof($arr) <= 1){
        return $arr;
    }


    $first_value = $arr[array_key_first($arr)];
    $left = [];
    $right = [];


    foreach ($arr as $key => $value) {
        if($first_value === $value){
            continue;
        }
        if($first_value > $value){
            $right[$key] = $value;
        }else{
            $left[$key] = $value;
        }
    }


    $left = dsort_array_by_value($left);
    $right = dsort_array_by_value($right);


    return $left + [array_key_first($arr) => $first_value] + $right;
}


$array = [
    "Dophia" => "31",
    "Bacob" => "41",
    "Ailliam" => "39",
    "Camesh" => "40",
];


echo 'original Array ( [Dophia] => "31" [Bacob] => "41" [Ailliam] => "39" [Camesh] => "40" )';
echo "</br></br>";
echo "Ascending Order Sort by Key"."</br>";
print_r(asort_array_by_key($array));
echo "</br></br>";
echo "Descending Srder Sorting by Key"."</br>";
print_r(dsort_array_by_key($array));
echo "</br></br>";
echo "Ascending Order Sort by Value"."</br>";
print_r(asort_array_by_value($array));
echo "</br></br>";
echo "Descending Order Sorting by Value"."</br>";
print_r(dsort_array_by_value($array));


?>