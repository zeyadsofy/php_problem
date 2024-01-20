<?php
function isprime($n){
    if($n <=1){
        return "not prime";
    }
    for($i=2;$i<$n;$i++){
        if($n % $i ==0){
            return "not prime";
        }
    }
    return "prime";
}
echo isprime(9); // not_prime
echo "<br>";
echo isprime(2); // prime
echo "<br>";
echo isprime(3); // prime
echo "<br>";
echo isprime(4); //not_prime
