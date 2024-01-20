<?php
function last_three($str){
   $x="";
   $x.= $str[-3];
   $x.= $str[-2];
   $x.= $str[-1];
    return $x; 
}

echo last_three("ray@exaple.com");