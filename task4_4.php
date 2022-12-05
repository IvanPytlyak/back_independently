<?

$str = (string) readline ('Enter string : ');

function scan_revers ($str){
   $pieces = strrev(join ('', explode(' ', $str)));
   return $pieces;
}

function scan ($str){
    $pieces = join ('', explode(' ', $str));
    return $pieces;
 }

if (scan($str) === scan_revers($str)){
    echo ('It is polindrom');
}
else{
    echo ('It is NOT polindrom');
};