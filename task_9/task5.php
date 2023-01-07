<?php

$arr =[
    't_5_1.txt',
    't_5_2.txt',
    't_5_3.txt'
];

$result = fopen('result.txt', 'w');
for ($i=0; $i<count($arr);$i++){
   fwrite($result,  file_get_contents($arr[$i]));
}