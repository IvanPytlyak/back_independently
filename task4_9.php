<?



$arr = [1, 40, 58, 99, 114, 12]; 

function sorting (&$arr) {
for ($j = 0; $j < count($arr) - 1; $j++){
    for ($i = 0; $i < count($arr) - $j - 1; $i++){
        if ($arr[$i] > $arr[$i + 1]){
            $buffer = $arr[$i + 1];
            $arr[$i + 1] = $arr[$i];
            $arr[$i] = $buffer;
        }
    }
}
var_dump($arr);
}

sorting($arr);


// = sort