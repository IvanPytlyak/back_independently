<?

$n = (int) readline ('Enter N: ' );
$summ =0;
if ($n >1){
    for ($i = 0; $i<=$n; $i++){
        $summ+= $i**2 . PHP_EOL;
    }
    echo $summ;
}
else {
    echo 'Число меньше или равно 0';
}