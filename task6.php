<?php
$num = (string)(readline('Enter number: '));
$arr =join('',  array_reverse(array_map('intval', str_split($num,1)))) ;
var_dump ($arr);
?>



