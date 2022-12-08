<?
$pattern = '/(\+\d{3}\s[(](33|25|29)[)]\s\d{3}\s\d{2}\s\d{2})/'; //* в конце
$arr_1=[];
$arr_2=[];
$arr_3=[];

$strTest_1 = 'aaaaaaawdaaaaaaa+375 (29) 777 77 77 aaaaaaaaaaaaaaaaa';
$strTest_2 = 'aaaaaaaaa---aaaaaaa+375 (25) 777 77 77 aaaaaaaa&&&aaaaa';
$strTest_3 = 'aaaaaaaaaaaaaaa a a a aaaaa +375 (33) 777 77 77 aaa aa';


if (preg_match($pattern, $strTest_1, $arr_1)){
    echo 'номер телефона присутствует в строке 1' . PHP_EOL;
}
else {
    echo 'номер телефона НЕ присутствует в строке 1' . PHP_EOL;
}


if (preg_match($pattern, $strTest_2, $arr_2)){
    echo 'номер телефона присутствует в строке 2' . PHP_EOL;
}
else {
    echo 'номер телефона НЕ присутствует в строке 2' . PHP_EOL;
}


if (preg_match($pattern, $strTest_3, $arr_3)){
    echo 'номер телефона присутствует в строке 3' . PHP_EOL;
}
else {
    echo 'номер телефона НЕ присутствует в строке 3' . PHP_EOL;
}

var_dump($arr_1[0]);
var_dump($arr_2[0]);
var_dump($arr_3[0]);