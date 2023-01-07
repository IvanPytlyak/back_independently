<?php
$file = '';
$str_one = '250';
$str_three = [1, 2, 3, 4]; // увеличение массива стр 15
$str_two =  join(' ', $str_three);


for ($i=1; $i<=2; $i++){
    fopen($i . '.txt', 'w');
}
 
$fd_one = fopen('1.txt', 'a');
fwrite($fd_one, $str_one);

for ($j=0; $j<=strlen($str_two);$j++){// почему для каждого доп элемента массива необходимо увеличивать диапазна coun на 1 ед (в примере +2)?
$fd_two = fopen('2.txt', 'a');
fwrite($fd_two, $str_two[$j]);
}

// $result = fopen('result.txt', 'a');
// ($result, file_get_contents('1.txt')); //fwrite($result, file_get_contents('1.txt' . PHP_EOL)); как разделить пробелом при вливании нескольких фалов?
// fwrite($result, file_get_contents('2.txt'));


echo (int)file_get_contents('1.txt') + array_sum(explode(' ', file_get_contents('2.txt'))); // нельзя написать описание, бъет ошибку int в начале не при чем
