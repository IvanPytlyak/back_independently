<?
$number = (int) readline('Enter position: ');  
$arr = [ 56, 102, 75, 88, 53];
$after =[];
$before =[];
$newArr=[];
if($number === 0 || $number < 0 || $number > count($arr)){
        echo 'not in range' . PHP_EOL;
}
    else {
for ($i = 0; $i < count($arr); $i++){
    if ($number === ($i+1)){
        $after = array_slice($arr, $number);
        $before = array_slice($arr, 0, $number-1);
        $newArr = array_merge($before, $after);
    }
}
}
var_dump ($newArr) .PHP_EOL;