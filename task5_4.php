<?

$str = (string) readline('Enter string: ');

$pattern = '/(\d{4}\/\d{2}\/\d{2}\s\d{2}:\d{2})/';
$arr = [];


if (preg_match($pattern, $str, $arr)){
    preg_match_all($pattern, $str, $arr, PREG_PATTERN_ORDER); 
    foreach ($arr[0] as $elem){
            if (substr($elem, 0, 4) >= 1000 && substr($elem, 0, 4) <= 2022){
                var_dump($elem);
            }
    }
}
else {
    'Цифры в строке отсутствуют';
}











// $newArr = [];
// $resArr = [];
// $summ = 0;
// $result = 0;


//     $test = preg_replace($pattern, '$1', $str, -1, $count); //количество вхождений
//     echo $count; //

// if (preg_match($pattern, $str, $arr)){
//     preg_match_all($pattern, $str, $arr, PREG_PATTERN_ORDER);
//     foreach ($arr as $elem){
//         for ($i = 0; $i < $count; $i++){
//            array_push($newArr, $arr[$i]); 
//         }
//     }



//     for($j = 0; $j = $count-1; $j++){
//         for($k = 0; $k = 3; $k++){
//            $newStr = explode(' ', $newArr[$j]);
//            array_push($resArr, $newStr[$k]); 
//         }
//     }
//     if ( join('', $resArr) > 1000 & join('', $resArr) < 2022){
//         echo ; //еще как -то увязать на сопостовимые даты?
//     }
// }

// else {
//     'Цифры в строке отсутствуют';
// }

// $test = preg_replace($pattern, '$1', $str, -1, $count); //количество вхождений

// if (preg_match($pattern, $str, $arr)){
//     preg_match_all($pattern, $str, $arr, PREG_PATTERN_ORDER);
   
//         for ($i = 0; $i < $count; $i++){
//            array_push($newArr, $arr[$i]);  // выделяем только те эл-мы массива arr, что заполнеы и пушим их в новый массив
//         }
//         foreach ($newArr[0] as $elem){    //в  первом эл-те нового массива буду лежать все найденные позиции
//             for($k = 0; $k = 3; $k++){    // к =3 т.к. длина года 4 символа, а вхдные данные изначально представлены в виде массива
//                 $result = join('', $elem[$k]); // циклит
//                  // if( ){}  как в условии настроить вывод певых 4 символов $elem? и задать по ним условие?
//             }
//         }
//         echo $result;
// }

// else {
//     'Цифры в строке отсутствуют';
// }





