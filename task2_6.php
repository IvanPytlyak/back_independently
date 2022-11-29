<?


// Полное совпадение
$str = (string) readline ('Enter string: ' );
$revStr= array_reverse(str_word_count ($str, 1));
$newArr=[];
foreach ($revStr as $elems){
    $elems = join('', array_reverse(str_split($elems)));
    array_push($newArr, $elems);
}
$newArr = join(' ', $newArr);

echo $str . PHP_EOL;
echo $newArr . PHP_EOL;

if($str === $newArr){
    echo 'Введнный текст является палиндромом';
}
else {
    echo 'Введнный текст НЕ является палиндромом';
}


// Аналог

//  if (strrev($str) == $str) {
//     echo 'Введнный текст является палиндромом';
//  }
//  else {
//          echo 'Введнный текст НЕ является палиндромом';
//      }


// И к вам и трем с смерти мавки. - к таким не применимо. Как анализировать символьный ряд без учета пробелов по-символьно?