<?php

$n= 0; //6
$arr = [1, 2, 3, 4, 5, 6];



function account ($arr, &$n){
    if ($n < count($arr)){
    print_r ($arr[count($arr)-(count($arr)-$n)]);
    $n++;
    account($arr, $n);
    }
    else{
        echo '';
    }
}
account($arr, $n);



