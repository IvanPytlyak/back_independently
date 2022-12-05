<?
$str = (string) readline ('Enter string : ');

function biggestSymbol($str){ 
    $arr = [];
    $pieces = join ('', explode(' ', $str));
    for ($i = 0; $i < strlen($str); $i++){
        array_push($arr, $pieces[$i]);
    }
    asort($arr);
    var_dump ((end($arr))) . PHP_EOL;
    var_dump (ord(end($arr))) . PHP_EOL;
   
}
biggestSymbol($str);

function summOfSymbols($str){
    $arr = [];
    $summ = 0;
    $pieces = join ('', explode(' ', $str));
    for ($i = 0; $i < strlen($str); $i++){
        array_push($arr, $pieces[$i]);
    }
    for ($j = 0; $j < count($arr); $j++){
        $summ += ord($arr[$j]);
    }
    return $summ;

}
echo summOfSymbols($str);

// если в строке будут пробелы код для summOfSymbols их не учитывает
// если в строке будут только пробелы код для biggestSymbol выведет пустоту
// if (stristr($str, ' ')){
//         echo 'yes';
// }
// else {
//     echo 'No';
// }