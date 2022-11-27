<?



// $n = (int) readline ('Enter N: ' );
// if ($n >10){
//    echo $n+=100 . PHP_EOL;
// }
// else {
//     echo  $n-=30 . PHP_EOL;
// }


// $n = (int) readline ('Enter N: ' );
// if ($n % 2 === 0){
//     echo $n/=2 . PHP_EOL;
// }
// else {
//     echo $n*=3 . PHP_EOL;
// }


// $n = (int) readline ('Enter N: ' );
// $summ =0;
// if ($n >1){
//     for ($i = 0; $i<=$n; $i++){
//         $summ+= $i**2 . PHP_EOL;
//     }
//     echo $summ;
// }
// else {
//     echo 'Число меньше 0';
// }


// for ($j=1; $j<=10; $j++){
//     for ($i = 1; $i<=10; $i++){
//         echo $j . '*' . $i . '=' . $i*$j . PHP_EOL;
//     } 
// }        


// $str = (string) readline ('Enter string: ' );
// $newStr = str_word_count ($str, 1);
// var_dump (max ($newStr));




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

//  if (strrev($str) == $str) {
//     echo 'Введнный текст является палиндромом';
//  }
//  else {
//          echo 'Введнный текст НЕ является палиндромом';
//      }



// И к вам и трем с смерти мавки. - к таким не применимо. Как анализировать символьный ряд без учета пробелов по-символьно?

