<?
$str = (string) readline('Enter auto number: ');
$pattern = '/\d{4}\s[A-Z]{2}-\d{1}/';
$arr=[];
if (preg_match($pattern, $str, $arr)){
    echo 'введенный номер корректен' . PHP_EOL;
    var_dump($arr[0]);
}
else {
    echo 'введенный номер НЕ корректен';
}
