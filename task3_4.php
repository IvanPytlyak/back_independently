<?
$str = (string) readline('Enter Word: ');
$arr = ['sdfgrf', 'fefdfdf', 'word', 'gtrwwwww'];

for ($i = 0; $i < count($arr); $i++){
    if ($str === $arr[$i]){
        echo 'index: ' . $i . PHP_EOL;
        break;
    }
}