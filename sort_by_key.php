<?php
function sort_by_key($arr,$index){
    for($i=0;$i<sizeof($arr);$i++){
        for($j=0;$j<sizeof($arr)-1-$i;$j++){
            if($arr[$j][$index] > $arr[$j+1][$index]){
                $tmp=$arr[$j];
                $arr[$j] = $arr[$j +1];
                $arr[$j+1] = $tmp;
            }
        }
    }
    return $arr;
}
$my_array = array();
$my_array[0]['name'] = 'dany';
$my_array[0]['email'] = 'sana@example.com';
$my_array[0]['phone'] = '111-111-1234';
$my_array[0]['country'] = 'USA';
$my_array[1]['name'] = 'body';
$my_array[1]['email'] = 'robin@example.com';
$my_array[1]['phone'] = '222-222-1235';
$my_array[1]['country'] = 'UK';
$my_array[2]['name'] = 'ahmed';
$my_array[2]['email'] = 'sofia@example.com';
$my_array[2]['phone'] = '333-333-1236';
$my_array[2]['country'] = 'India';
print_r(sort_by_key($my_array, 'phone'));
