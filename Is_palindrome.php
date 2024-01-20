<?php
function revers_str($str){
    $x="";
    for($i=strlen($str)-1;$i>=0;$i--){
        $x .= $str[$i];
    }
    return $x;
}

function Is_palindrome($str1){
    if($str1 === revers_str($str1)){
        return "it is palindrome";
    }
    return " is not palindrome";
}

echo Is_palindrome("44");
echo "<br>";
echo Is_palindrome("madam");
echo "<br>";