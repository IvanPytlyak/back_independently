<?

echo "<link rel='stylesheet' href='style.css'>";

$result = $_SERVER['REQUEST_URI'];
$requestPatch1 = explode('/', $result);

echo '<a href="/task6_1.php"> главная страница </a></br>';

$users = [
    [
        'id' => 1,
        'login' => 'ivan@mail.ru',
        'name' => 'Ivan',
        'surname' => 'Pytlyak',
        'patronymic' => 'Pavlovich',
        'dateOfBirth' => '01.09.1991',
        'dateOfRegistration' => '01.01.2018',
        'dateOfLastAccountLogin' => '06.12.2022',
        'fileNameOfAvatar' => 'public/first.jpg',
    ],
    [
        'id' => 2,
        'login' => 'tatyana@google.com',
        'name' => 'Tatyana',
        'surname' => 'Tihomirova',
        'patronymic' => 'Evhenevna',
        'dateOfBirth' => '01.10.1992',
        'dateOfRegistration' => '01.02.2019',
        'dateOfLastAccountLogin' => '07.12.2022',
        'fileNameOfAvatar' => 'public/second.jpg',
    ],
    [
        'id' => 3,
        'login' => 'roman@mail.ru',
        'name' => 'Roman',
        'surname' => 'Seduh',
        'patronymic' => 'Ivanovich',
        'dateOfBirth' => '01.11.1993',
        'dateOfRegistration' => '01.03.2020',
        'dateOfLastAccountLogin' => '05.12.2022',
        'fileNameOfAvatar' => 'public/third.jpg',
    ],
    [
        'id' => 4,
        'login' => 'evgeniy@mail.ru',
        'name' => 'Evgeniy',
        'surname' => 'Kiselev',
        'patronymic' => 'Sergeevich',
        'dateOfBirth' => '01.12.1994',
        'dateOfRegistration' => '01.04.2021',
        'dateOfLastAccountLogin' => '08.12.2022',
        'fileNameOfAvatar' => 'public/fourth.jpg',
    ],
];

// foreach ($users as $user) {
     // $user['id']
    // $user['login']
    // $user['name']
    // $user['surname']
    // $user['patronymic']
    // $user['dateOfBirth']
    // $user['dateOfRegistration']
    // $user['dateOfLastAccountLogin']
    // $user['fileNameOfAvatar']


    // if($reqestPatch === '/task6_1.php'){  
    //     echo '<table border="1">'; 
    //     echo '<tr>' ;
    //         echo  '<td>' . $user['id'] . '</td>';
    //         echo  '<td>' . '<a href="task6_1.php/' . $user['name'] . '">' . $user['login'] . '</a' . '</td>'; 
    //         echo  '<td>' . $user['name'] . '</td>';
    //         echo  '<td>' . $user['surname'] . '</td>';
    //     echo '</tr>';    
    //     echo '</table>';
    //     exit; // блочит равномерое создание по-строяных карточек, в противном случае нужно итерировать, но как ответ пока жду ибо на первый элемент $user['id][0] таким образом я выйти не могу
    // } 

    

    // }


$flag = false;
if (isset ($requestPatch1[2])){ 
    echo '<table border="1">';
    
    
    echo '<tr>' ;  
            foreach ($users as $user){
                foreach ($user as $key => $elem){
                        echo '<th>' . $key . '</th>';   
                }
            }
    echo '</tr>';      


    
    for ($i =0 ; $i<= count($users)-1; $i++){ 
        if ((string) $users[$i]['id'] === $requestPatch1[2]){
                echo '<tr>' ;
                echo  '<td>' . $users[$i]['id'] . '</td>';
                echo  '<td>' . '<a href="task6_1.php/' . $users[$i]['id'] . '">' . $users[$i]['login'] . '</a' . '</td>'; //$user['name'][$j] не записывает корректно имя для ссылки
                echo  '<td>' . $users[$i]['name'] . '</td>';
                echo  '<td>' . $users[$i]['surname'] . '</td>';
                echo  '<td>' . $users[$i]['patronymic'] . '</td>';
                echo  '<td>' . $users[$i]['dateOfBirth'] . '</td>';
                echo  '<td>' . $users[$i]['dateOfRegistration'] . '</td>';
                echo  '<td>' . $users[$i]['dateOfLastAccountLogin'] . '</td>';
                echo  '<td>' . '<img src="' . $users[$i]['fileNameOfAvatar'] . '">' . '</td>';
                echo '</tr>';      
            $flag= true;
            break;
        }
    }
    if ($flag === false){
        echo 'пользователь не найден';
    }
    echo '</table>';
    exit;
}
// if (isset ($requestPatch1[2])){
//     for ($i =0 ; $i<= count($users)-1; $i++){ 
//         if ((string) $users[$i]['id'] === $requestPatch1[2]){
//             echo 'эта страница пренадлежит пользователю: ' . $users[$i]['name'];
//             echo '<img src="' . $users[$i]['fileNameOfAvatar'] . '">';
//             $flag= true;
//             break;
//         }
//     }
//     if ($flag === false){
//         echo 'пользователь не найден';
//     }
//     exit;
// }


if($requestPatch1[1] === 'task6_1.php'){  
    echo '<table border="1">';
    for ($i =0 ; $i<= count($users)-1; $i++){          
        echo '<tr>' ;
        echo  '<td>' . $users[$i]['id'] . '</td>';
        echo  '<td>' . '<a href="task6_1.php/' . $users[$i]['id'] . '">' . $users[$i]['login'] . '</a' . '</td>'; //$user['name'][$j] не записывает корректно имя для ссылки
        echo  '<td>' . $users[$i]['name'] . '</td>';
        echo  '<td>' . $users[$i]['surname'] . '</td>';
        echo '</tr>'; // вообще ни на что не влияет
    } 
    echo '</table>';
    exit;
}





// работающая
// $flag = false;
// if (isset ($requestPatch1[2])){
    
            
//     for ($i =0 ; $i<= count($users)-1; $i++){ 
//         if ((string) $users[$i]['id'] === $requestPatch1[2]){
//             echo '<table border="1">';
//             echo '<tr>' ;  
//             foreach ($users as $user){
//                 foreach ($user as $key=> $elem){
//                         echo '<th>' . $key . '</th>';   
//                 }
//             }
//             echo '</tr>'; 
//                 echo '<tr>' ;
//                 echo  '<td>' . $users[$i]['id'] . '</td>';
//                 echo  '<td>' . '<a href="task6_1.php/' . $users[$i]['id'] . '">' . $users[$i]['login'] . '</a' . '</td>'; //$user['name'][$j] не записывает корректно имя для ссылки
//                 echo  '<td>' . $users[$i]['name'] . '</td>';
//                 echo  '<td>' . $users[$i]['surname'] . '</td>';
//                 echo  '<td>' . $users[$i]['patronymic'] . '</td>';
//                 echo  '<td>' . $users[$i]['dateOfBirth'] . '</td>';
//                 echo  '<td>' . $users[$i]['dateOfRegistration'] . '</td>';
//                 echo  '<td>' . $users[$i]['dateOfLastAccountLogin'] . '</td>';
//                 echo  '<td>' . '<img src="' . $users[$i]['fileNameOfAvatar'] . '">' . '</td>';
//                 echo '</tr>'; 
//                 echo '</table>';
//             $flag= true;
//             break;
//         }

//     }
//     if ($flag === false){
//         echo 'пользователь не найден';
//     }
//     exit;
// }








// $flag = false;
// if (isset ($requestPatch1[2])){
//     echo '<table border="1">';
//             echo '<tr>' ;  
//             foreach ($users as $user){
//                 foreach ($user as $key=> $elem){
//                         echo '<th>' . $key . '</th>';   
//                 }
//             }
//             echo '</tr>'; 
//     for ($i =0 ; $i<= count($users)-1; $i++){ 
//         if ((string) $users[$i]['id'] === $requestPatch1[2]){
//                 echo '<tr>' ;
//                 echo  '<td>' . $users[$i]['id'] . '</td>';
//                 echo  '<td>' . '<a href="task6_1.php/' . $users[$i]['id'] . '">' . $users[$i]['login'] . '</a' . '</td>'; //$user['name'][$j] не записывает корректно имя для ссылки
//                 echo  '<td>' . $users[$i]['name'] . '</td>';
//                 echo  '<td>' . $users[$i]['surname'] . '</td>';
//                 echo  '<td>' . $users[$i]['patronymic'] . '</td>';
//                 echo  '<td>' . $users[$i]['dateOfBirth'] . '</td>';
//                 echo  '<td>' . $users[$i]['dateOfRegistration'] . '</td>';
//                 echo  '<td>' . $users[$i]['dateOfLastAccountLogin'] . '</td>';
//                 echo  '<td>' . '<img src="' . $users[$i]['fileNameOfAvatar'] . '">' . '</td>';
//                 echo '</tr>'; 
//             $flag= true;
//             break;
//         }
//         echo '</table>';
//     }
//     if ($flag === false){
//         echo 'пользователь не найден';
//     }
//     exit;
// }