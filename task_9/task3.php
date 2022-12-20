<?php
$integer = 4;

if (file_exists('new_task_3.txt')){
    unlink('new_task_3.txt');
}
else{
    $openFile = fopen('new_task_3.txt', 'a');
    fwrite($openFile, $integer);
    $newFile = (int) file_get_contents('new_task_3.txt')**2;
    file_put_contents('new_task_3.txt', $newFile);
    fclose($openFile);
}


