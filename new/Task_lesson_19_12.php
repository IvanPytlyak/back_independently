<?php




$arr =[
    'text1.txt',
    'text2.txt',
    'text3.txt',
];

$str ='';

for ($i=0; $i< count($arr); $i++){
  $str .= file_get_contents($arr[$i]);
}
$buff = fopen('newTxt.txt', 'w+');
fputs($buff, $str);
fclose($buff);
echo file_get_contents('newTxt.txt');

// Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt. Вручную сделайте массив
//  с именами этих файлов. Переберите его циклом, прочитайте содержимое каждого из файлов,
//   слейте его в одну строку и запишите в новый файл new.txt. Изначально этого файла не должно быть.

