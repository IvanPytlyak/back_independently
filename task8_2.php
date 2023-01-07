<?php
    if (empty($_POST['birthday'])){ 
?>

<form action="<?php ?>" method="post">
<p>Enter date of birthday <p>
<input type="date" name="birthday" value="" placeholder="18">
<br>
<br>
<input type="submit" value="Submit">
</form>

<?php
}
?>

<?php

$buff = $_SERVER['REQUEST_URI'];
$startPage = explode('/', $buff);

echo '<a href="/task8_2.php"> На главную </a>' . '<br>'; //как сделать диинамичную ссылку? $startPage[1] ?

$yeahr = explode('-',($_POST['birthday'])); //1992 09 15 массив
$piece = mb_substr($_POST['birthday'], 5); // 09-15
$piece_mon =(int) mb_substr($piece, 0, 2); // 09
$piece_day =(int) mb_substr($piece, 3); // 15
$onlyYeahr =date('Y');
$onlyYeahr_plus =date('Y')+1;
$onlyMon =date('m');
$onlyDay=date('d');
$birth = $onlyYeahr . '-' . $piece;
$birth_plus = $onlyYeahr_plus . '-' . $piece;
// $date[1] = 9 = месяц
// $date[2] 15 = день
$currentDate = date_create('now');
$dateOfBirthday =date_create($birth);
$dateOfBirthday_plus =date_create($birth_plus);

$date = explode('-', $birth);
var_dump($dateOfBirthday_plus) . PHP_EOL;


session_start();
if (!isset($_SESSION['count'])){
    $_SESSION['count']=0;
}
else{
   $_SESSION['count']++;
   $date_1 = date_create($birth);
   $date_2 = date_create('now');
   if ($date_1 > $date_2){
    echo date_diff($date_2, $date_1)->format('%R%a%H:%I:%S') . PHP_EOL;
   }
   else {
    echo date_diff($date_2, $dateOfBirthday_plus)->format('%R%a%H:%I:%S') . PHP_EOL;
   }
//    echo date_diff($date_1, $date_2)->format('%R%d');

//    if ((int) $date[1]> (int) $onlyMon){
//         if ((int) $date[2]> (int) $onlyDay){
//           echo 'До ДР осталось: ' . date_diff($dateOfBirthday, $currentDate)->format('%d') . ' дней';
//         }
//     }
//     if ((int) $date[1]= $onlyMon){
//         if ((int) $date[2]< (int) $onlyDay){
//             echo 'До ДР осталось: ' . date_diff($dateOfBirthday, $currentDate)->format('%d') . ' дней';
//         }
//     }
//     if ((int) $date[1]< (int) $onlyMon){
//         echo 'До ДР осталось: ' . date_diff($dateOfBirthday_plus, $currentDate)->format('%d') . ' дней';
    }
// }





// if (date_create('m-d')===($piece)){
//     echo 'Поздравляем, у Вас сегодня день рождение!' . PHP_EOL;
// }
// else {
//    echo 'До дня рождения осталось ' . date_diff(date_create(), $piece) . ' дней' . PHP_EOL; // ТУТ нужна помощь, конфликт форматов
// }