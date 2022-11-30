<?
// Перекрытие
// $arr_one =[1, 0, 2, 24, 2, 6, 12, 2, 5, 21];
// $arr_two =[2, 1, 5, 99, 7];
// $result = array_merge($arr_one, $arr_two);
// arsort($result);
// var_dump($result);




// Совмещение
$arr_one =[1, 0, 2, 24, 2, 6, 12, 2, 5, 21];
$arr_two =[2, 1, 5, 99, 7];
if (count($arr_one) < count($arr_two)){
    for ($i = 0; $i < count($arr_one); $i++){
        array_push($arr_one, $arr_two[$i]); 
    }
}
else {
    for ($i = 0; $i < count($arr_two); $i++){
        array_push($arr_one, $arr_two[$i]); 
    }
}
arsort($arr_one);
var_dump(($arr_one)); 
