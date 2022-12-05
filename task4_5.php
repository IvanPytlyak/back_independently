<?


$str = (string) readline ('Enter string : ');
$search = (string) readline ('Enter symbol to search : ');

function scan($str, $search){
    $pieces = join ('', explode(' ', $str));
    $k=0;
    for ($i=0; $i < strlen($pieces); $i++){
        if ($search === $pieces[$i]){
            $k++;
        }
    }
    echo $k;
}
echo (scan($str, $search));