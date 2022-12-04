<?

$a = (int) readline ('Enter A : ');
$b = (int) readline ('Enter B : ');

function gip ($a, $b){
    return 'гиппотенуза = ' . sqrt($a**2 + $b**2);
}
echo gip ($a, $b);