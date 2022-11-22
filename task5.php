<?php
$number = (int) readline ('Enter three-digit number: ');
echo floor($number/100) + floor(($number - floor($number/100)*100)/10) + floor(($number - floor($number/100)*100)- (10*floor(($number - floor($number/100)*100)/10)));
?>

