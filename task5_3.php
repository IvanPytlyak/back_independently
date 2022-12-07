<?
$str = (string) readline('Enter string: ');
$pattern = '/(\d+)/';
$arr=[];
$summ=0;
if (preg_match($pattern, $str, $arr)){
    preg_match_all($pattern,
    $str,
    $arr, PREG_SET_ORDER);
    foreach($arr as $elem){
        $summ += $elem[0];
    }
    echo $summ; 
    var_dump($arr);
}
else {
   echo 'Цифры в строке отсутствуют';
}

