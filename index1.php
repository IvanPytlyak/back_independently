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
// $str = (string) readline ('Enter string: ' );
// $revStr= array_reverse(str_word_count ($str, 1));
// $newArr=[];
// foreach ($revStr as $elems){
//     $elems = join('', array_reverse(str_split($elems)));
//     array_push($newArr, $elems);
// }
// $newArr = join(' ', $newArr);

// echo $str . PHP_EOL;
// echo $newArr . PHP_EOL;

// if($str === $newArr){
//     echo 'Введнный текст является палиндромом';
// }
// else {
//     echo 'Введнный текст НЕ является палиндромом';
// }

//  if (strrev($str) == $str) {
//     echo 'Введнный текст является палиндромом';
//  }
//  else {
//          echo 'Введнный текст НЕ является палиндромом';
//      }



// И к вам и трем с смерти мавки. - к таким не применимо. Как анализировать символьный ряд без учета пробелов по-символьно?






// Дан массив целых чисел. Найдите сумму всех элементов массива до элемента со значением 0



// $arr = [ 1, 2, 3, 0, 5];

// $summ=0;

// for ($i = 0; $i < count($arr); $i++){
//     if ($arr[$i] === 0){
//     break;
//     }
//     $summ+=$arr[$i];
// }
// echo $summ . PHP_EOL;



// $arr = [ 1, 2, 3, 0, 5];
// $summ=0;
// foreach ($arr as $elem){
//     if ($elem ===0){
//         break;
//     }
//     $summ+=$elem;
// }

// echo $summ . PHP_EOL;




// $arr =[1, 0, 2, 3, 4, 6, 12, 2, 5, 2];

// foreach($arr as $key => $number){
//     for ($i=0; $i < count($arr); $i++){
//         if ( $number === $arr[$i] && $key !== $i) {
//             echo 'have repetition :' . $number . ' index :' . $i . PHP_EOL;
//             break 2;
//         }
//     }
// }

// for ($i=0; $i < count($arr); $i++){
//     for ($j=0; $j < count($arr); $j++){
//         if ($arr[$i] === $arr[$j] && $j !==$i){
//             echo 'have repetition :' . $i . ' index :' . $j . PHP_EOL;
//             break 2;
//         }
//     }
// }
















// 1.

// $arr =[1, 0, 2, 24, 2, 6, 12, 2, 5, 2];

// for ($i = 0; $i < count($arr); $i++){
//     if ($arr[$i]**2 === $i){
//         echo 'index :' . $i . ' value: ' . $arr[$i] . PHP_EOL;
//     }
//     else {
//         echo 'note founde' . PHP_EOL;
//     }
// }





// 2. 

// $arr =[1, 0, 2, 24, 2, 6, 12, 2, 5, 2];
// $arr= array_unique($arr);
// var_dump ($arr); 

// Дан массив из n чисел, удалите из массива повторные значения. Выведите результат на экран.



// 3.Даны два массива n и m. Образовать из этих двух массивов единый упорядоченный по убыванию массив.

// Перекрытие
// $arr_one =[1, 0, 2, 24, 2, 6, 12, 2, 5, 21];
// $arr_two =[2, 1, 5, 99, 7];
// $result = array_merge($arr_one, $arr_two);
// arsort($result);
// var_dump($result);


// Совмещение
// $arr_one =[1, 0, 2, 24, 2, 6, 12, 2, 5, 21];
// $arr_two =[2, 1, 5, 99, 7];
// if (count($arr_one) < count($arr_two)){
//     for ($i = 0; $i < count($arr_one); $i++){
//         array_push($arr_one, $arr_two[$i]); 
//     }
// }
// else {
//     for ($i = 0; $i < count($arr_two); $i++){
//         array_push($arr_one, $arr_two[$i]); 
//     }
// }
// arsort($arr_one);
// var_dump(($arr_one)); 













// 7.

// $arr =[-1, 10, 2, -24, 2, 6, -12, 2, 5, 2];
// $newArr=[];
// for ($i = 0; $i < count($arr); $i++){
//     if ($arr[$i]>0){
//         array_push($newArr, $arr[$i]);
//     }
// else {
//     array_push($newArr, $arr[$i], 0);
// }
// }

// var_dump ($newArr);



// Разработайте функцию для вычисления суммы двух заданных чисел
// Разработайте функцию, которая позволит вычислить произведение двух заданных чисел. Вычислите с ее помощью: (a+b) * c.


// function summ ($a, $b, $c = 0){
//     echo ($a+$b)*$c;
// }
// summ(2,10,3);


// function summ1 ($a, $b, $c = 0){
//     return ($a+$b)*$c;
// }

// // summ(2,10,3);
// echo summ1(2,10)*$c . PHP_EOL;

// function summ3 ($a, $b){
//     return ($a+$b);
// }

// function summ4 ($a, $b){
//     return ($a*$b);
// }

// echo summ4(summ3(2,3),3) . PHP_EOL;



// Разработайте функцию, которая в качестве параметра принимает номер дня недели, а как результат выполнения выводит название дня недели.


// $day = (int) readline('Enter day: ');
   
// function myFn ($day){
//     $arr= ['ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ', 'ВС'];
//     if ($day > 0 && $day < count($arr)+1){
//         echo  $arr[$day-1] . PHP_EOL;
//         return;
//     }
//     echo 'Error' . PHP_EOL;
// }
// myFn($day);

























// Дан массив A. Изменить значение массива А с помощью функции, передав его в качестве параметра. Например: добавить новые элементы.




// $arr =[];
// function myFn (&$arr){
//     for ($i = 1; $i < 10; $i++){
//     array_push($arr, $i);
//     }
//     return $arr;
// }
// var_dump (myFn ($arr));




// $str = (string) readline ('Enter string: ');
// $console = function () use ($str){
//     echo $str . 'NEW' . PHP_EOL;
// };
// $console();



// $str ='dewddwdwfw';
// function now (&$str){
//     $str .= ' asaa saaca a';
//     echo $str;
// };

// now($str);



// $k=0;
// function now (&$k){
//         $k++;
//         echo $k;
//     };
// now($k);
// now($k);
// now($k);




// $a = '123';
// $b = 4;
// $test = 1.5;
// $anotherVariable = 'Hello World';

// $arr=[];

// array_push($arr, $$a, $$b, $$test, $$anotherVariable);

// var_dump ($arr);









// $str = 'wefdwedebercerberfe e berfw b';
// $pattern ='/(?<=b).{3}/';
// if (preg_match($pattern, $str, $arr)){

// }

// $str = '.exe fvdfvd .pngergrer.png sdfsdf.xls preg_replace(';
// $pattern = '/(?<=\.)(exe|data|doc|docx|xls)/';


// if (preg_match($pattern, $str, $arr)){
//     echo 'good';
// }
// else {
//     echo 'MNOO';
// }

// $pattern = '/(ivan|pavel)/';


// echo ($_SERVER['REQUEST_URI']) . '<br/>';



	// $str = '12 34 56 78';
    // $res =preg_replace('#(\d+)#', '$1', $str);
    // echo $res;


    // $pattern ='/(\d{2})\.(\d{2})\.(\d{4})/';
	// $str = '31.12.2025';
    // $res =preg_replace($pattern, '$3.$2.$1', $str);
    // echo $res;


   