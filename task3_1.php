<?
$arr =[1, 0, 2, 24, 2, 6, 12, 2, 5, 2];

for ($i = 0; $i < count($arr); $i++){
    if ($arr[$i]**2 === $i){
        echo 'index :' . $i . ' value: ' . $arr[$i] . PHP_EOL;
    }
    else {
        echo 'note founde' . PHP_EOL;
    }
}