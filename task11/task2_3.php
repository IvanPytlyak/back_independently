<?php

// созданые с помощью __get() свойства доступны только для чтения!!!
class Date
{
    // private $year;
    // private $month;
    // private $day;
    public $year;
    public $month;
    public $day;

    public function __set($property, $value){
        $this->$property =$value;
    }

    public function __get($property){
        return date("w", strtotime($this->year . '-' . $this->month . '-' . $this->day)); 
        // return $this->year . '-' . $this->month . '-' . $this->day; 
    }



    public function weekDay($year,$month, $day){
        $days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда','Четверг', 'Пятница', 'Суббота'];
        $myDate = date("w", strtotime($this->year . '-' . $this->month . '-' . $this->day)); // 'w' -выводит номер дня недели
        for ($i=0; $i<count($days);$i++){
            if ($i=== (int) $myDate){ 
                echo $days[$i];
            }
    }
}
}



$test = new Date;
// $test->year =2023;
// $test->month = 05;
// $test->day =4;

$test->weekDay(2023,01,05);

// $days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда','Четверг', 'Пятница', 'Суббота'];

// for ($i=0; $i<count($days);$i++){
//     if ($i=== (int) $test->year){ // $test->year (можно поставить любое значение т.к. __get выводит строго указанную по форме дату к чему не обращайся)
//         echo $days[$i];
//     }
//     // else {
//     //     echo 'Ошибка';
//     // }
// }   

// echo $test->year; // выводят одно и то же
// echo '</br></br>'; 
// echo $test->month; // выводят одно и то же
// echo '</br></br>'; 
// echo $test->day; // выводят одно и то же