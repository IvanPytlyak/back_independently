<?


function summ (...$elems){
    $summ = 0;
    foreach ($elems as $elem){
        $summ += $elem . PHP_EOL;
    }
    echo $summ . PHP_EOL;
}

echo summ(...explode(',', numbers()));

function numbers () {
    $arr=[];
    $result = '';
    $quant = (int) readline ('Enter quantity elements : ');
        for ($i = 0; $i < $quant; $i++){
            
            $elem[$i] = (int) readline ('Enter element : ');
            array_push($arr, $elem[$i]);
            $result = join(',', $arr);
        }
        return $result;   
} 


