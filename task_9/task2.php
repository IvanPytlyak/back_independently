<?php

$arr =[1, 2, 3, 4, 5];
$openFile =fopen('new_task2.txt', 'a');
fwrite($openFile, array_sum($arr));
fclose($openFile);