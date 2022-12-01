<?
$arr =[-1, 10, 2, -24, 2, 6, -12, 2, 5, 2];
$newArr=[];
for ($i = 0; $i < count($arr); $i++){
    if ($arr[$i]>0){
        array_push($newArr, $arr[$i]);
    }
else {
    array_push($newArr, $arr[$i], 0);
}
}

var_dump ($newArr);