<?

$arr = [
    'ID' => [
        '1',
        '2',
        '3',
        '4'
    ],
    'Login' =>[
        'ivan@mail.ru',
        'tatyana@google.com',
        'roman@mail.ru',
        'evgeniy@mail.ru',
    ],
    'Name' =>[
        'Ivan',
        'Tatyana',
        'Roman',
        'Evgeniy'
    ],
    'Surname' =>[
        'Pyllyak',
        'Tihomirova',
        'Seduh',
        'Kiselev'
    ],
    'Patronymic' =>[
        'Pavlovich',
        'Evhenevna',
        'Ivanovich',
        'Sergeevich'
    ],
    'Date of birth' =>[
        '01.09.91',
        '01.10.92',
        '01.11.93',
        '01.12.94',
    ],
    'date of registration' =>[
        '01.01.2018',
        '01.02.2019',
        '01.03.2020',
        '01.04.2021',
    ],
    'date of last account login' =>[
        '06.12.2022',
        '07.12.2022',
        '07.12.2022',
        '09.12.2022',
    ],
    'file name for avatar' =>[
        'first',
        'second',
        'third',
        'fourth'
    ],
];

$reqestUri = $_SERVER['REQUEST_URI'];
$reqestPatch =explode('/', $reqestUri);
foreach ($arr as $elem){};
echo '<a href="/"> главная страница </a></br>';
if($reqestPatch[1] === 'task6_1.php'){  // первоночальная страница не равна REQUEST_URI
    echo '<table border="1">';
    // for ($i =0 ; $i<= 4; $i++){          // c  автоматическим созданием таблицы и ее автозаполнением не срослось
    //     echo '<tr>' . $arr['Name'][1];
    //     for ($j =0 ; $j<= 4; $j++){
    //             echo  '<td>' . $arr['ID'][$j] . '</td>';
    //             echo  '<td>' . <a href="task6_1.php/ivan">' . $arr['Login'][$j] . '</td>'; // как здесь  подставлять динамичные ссылки?
    //             echo  '<td>' . $arr['Name'][$j] . '</td>';
    //               echo  '<td>' . $arr['Surname'][$j] . '</td>';
    //     }
    // }
    echo '<tr>' . '<td>' . $arr['ID'][0] . '</td>' . 
                  '<td>' . '<a href="task6_1.php/ivan">' . $arr['Login'][0] . '</a>' . '</td>' . // переход по ссылкам не перекрестный а последовательный, идет наслоение, нужен аналог "event.stopPropagation"
                  '<td>' . $arr['Name'][0] . '</td>' .
                  '<td>' . $arr['Surname'][0] . '</td>' . 
                    
        '</tr>';
    echo '<tr>' . '<td>' . $arr['ID'][1] . '</td>' . 
                  '<td>' . '<a href="task6_1.php/tatyana">' . $arr['Login'][1] . '</a>' . '</td>' .   
                  '<td>' . $arr['Name'][1] . '</td>' .
                  '<td>' . $arr['Surname'][1] . '</td>' .          
        '</tr>';
    echo '<tr>' . '<td>' . $arr['ID'][2] . '</td>' . 
                  '<td>' . '<a href="task6_1.php/roman">' . $arr['Login'][2] . '</a>' . '</td>' .    
                  '<td>' . $arr['Name'][2] . '</td>' .
                  '<td>' . $arr['Surname'][2] . '</td>' .          
        '</tr>';
    echo '<tr>' . '<td>' . $arr['ID'][3] . '</td>' . 
                  '<td>' . '<a href="task6_1.php/evgeniy">' . $arr['Login'][3] . '</a>' . '</td>' .   
                  '<td>' . $arr['Name'][3] . '</td>' .
                  '<td>' . $arr['Surname'][3] . '</td>' .          
        '</tr>';            
    echo '</table>';
    exit;
}

if($reqestPatch[1] === 'task6_1.php/ivan'){ // воспринимает как и просто task6_1.php, не отображает изменения
    echo '<table border="1">';
    echo '<tr>' . 
        '<td>' . $arr['ID'][0] . '</td>' . 
        '<td>' . '<a href="task6_1.php/ivan">' . $arr['Login'][0] . '</a>' . '</td>' .  
        '<td>' . $arr['Name'][0] . '</td>' .
        '<td>' . $arr['Surname'][0] . '</td>' . 
        '<td>' . $arr['Patronymic'][0] . '</td>' . 
        '<td>' . $arr['Date of birth'][0] . '</td>' . 
        '<td>' . $arr['date of registration'][0] . '</td>' . 
        '<td>' . $arr['date of last account login'][0] . '</td>' . 
        // '<td>' . '<img src="./public/first.jpg"' . '</td>' .   // как вставить ссылку из массива в текст?   
        '<td>' . $arr['file name for avatar'][0] . '</td>' . // или так оно подтянет файл?
    '</tr>';
    echo '</table>';
    exit; 
}
if($reqestPatch[1] === 'task6_1.php/tatyana'){ // воспринимает как и просто task6_1.php, не отображает изменения
    echo '<table border="1">';
    echo '<tr>' . 
        '<td>' . $arr['ID'][1] . '</td>' . 
        '<td>' . '<a href="task6_1.php/tatyana">' . $arr['Login'][1] . '</a>' . '</td>' .  
        '<td>' . $arr['Name'][1] . '</td>' .
        '<td>' . $arr['Surname'][1] . '</td>' . 
        '<td>' . $arr['Patronymic'][1] . '</td>' . 
        '<td>' . $arr['Date of birth'][1] . '</td>' . 
        '<td>' . $arr['date of registration'][1] . '</td>' . 
        '<td>' . $arr['date of last account login'][1] . '</td>' . 
        // '<td>' . '<img src="./public/second.jpg"' . '</td>' . 
        '<td>' . $arr['file name for avatar'][1] . '</td>' . // или так оно подтянет файл?     
    '</tr>';
    echo '</table>';
    exit;
}
if($reqestPatch[1] === 'task6_1.php/roman'){ // воспринимает как и просто task6_1.php, не отображает изменения
    echo '<table border="1">';
    echo '<tr>' . 
        '<td>' . $arr['ID'][2] . '</td>' . 
        '<td>' . '<a href="task6_1.php/roman">' . $arr['Login'][2] . '</a>' . '</td>' .  
        '<td>' . $arr['Name'][2] . '</td>' .
        '<td>' . $arr['Surname'][2] . '</td>' . 
        '<td>' . $arr['Patronymic'][2] . '</td>' . 
        '<td>' . $arr['Date of birth'][2] . '</td>' . 
        '<td>' . $arr['date of registration'][2] . '</td>' . 
        '<td>' . $arr['date of last account login'][2] . '</td>' . 
        // '<td>' . '<img src="./public/third.jpg"' . '</td>' . 
        '<td>' . $arr['file name for avatar'][2] . '</td>' . // или так оно подтянет файл?     
    '</tr>';
    echo '</table>';
    exit;
}
if($reqestPatch[1] === 'task6_1.php/evgeniy'){ // воспринимает как и просто task6_1.php, не отображает изменения
    echo '<table border="1">';
    echo '<tr>' . 
        '<td>' . $arr['ID'][3] . '</td>' . 
        '<td>' . '<a href="task6_1.php/evgeniy">' . $arr['Login'][3] . '</a>' . '</td>' .  
        '<td>' . $arr['Name'][3] . '</td>' .
        '<td>' . $arr['Surname'][3] . '</td>' . 
        '<td>' . $arr['Patronymic'][3] . '</td>' . 
        '<td>' . $arr['Date of birth'][3] . '</td>' . 
        '<td>' . $arr['date of registration'][3] . '</td>' . 
        '<td>' . $arr['date of last account login'][3] . '</td>' . 
        // '<td>' . '<img src="./public/fourth.jpg"' . '</td>' .
        '<td>' . $arr['file name for avatar'][3] . '</td>' . // или так оно подтянет файл?      
    '</tr>';
    echo '</table>';
    exit;
}




// Автоматическое расширение табличной части
// $rows = count($arr);
// $cols = 5; // почему - count($elem)+1; бъет ощибку, хотя в консоль выводит корректно через echo?
// foreach ($arr as $elem){   
// }
// echo '<h1>' . 'Lesson 7, Task 6' . '<h1>';
// echo '<table border="1">';
// for ($tr=1; $tr <= $rows; $tr++){
//     echo '<tr>' . 'сюда записать элмент массива, вообще непонятно как, да еще чтобы он итерировался по столбцамб при ссылке типа $elem в табличную часть не попадает' . '</tr>';
// for ($td=1; $td <= $cols; $td++){
//     echo '<td>' . 'enter value' . '</td>';
// }
// }
// echo '</table>';



echo "<link rel='stylesheet' href='styles.css'>";

// абсолютно не понятно как интегрировать ссылки в итераторы создания таблиц да еще  и в рамках элементов массива
//    echo count($elem); // нормально выводит количество 