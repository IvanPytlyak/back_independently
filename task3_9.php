<?

$arr = [
    'Name' =>[
    ],
    'Surname' =>[
    ],
    'Age' =>[
    ]
];
while(true){
    echo PHP_EOL . '1. Add user' . PHP_EOL;
    echo PHP_EOL . '2. Show user list' . PHP_EOL;
    echo PHP_EOL . '3. Search' . PHP_EOL;
    echo PHP_EOL . '0. Exit'  . PHP_EOL;
    $addOperation  = (int) readline('Enter menu item:');
    
    if ($addOperation === 1){
        $name = (string) readline('Enter Name: ');
        $surname = (string) readline('Enter Surname: ');
        $age = (int) readline('Enter Age: ');   
        array_push($arr['Name'], $name);
        array_push($arr['Surname'], $surname);
        array_push($arr['Age'], $age);
    }
   
    if ($addOperation === 2){
        for ($j = 0; $j < count($arr['Name']); $j++) {
        echo sprintf('%s: Имя:%s Фамилия:%s Возраст:%s', $j+1 , $arr['Name'][$j], $arr['Surname'][$j], $arr['Age'][$j]) . PHP_EOL;
        }
    }

    
    if ($addOperation === 3){
        $str = (string) readline('Enter Surname: ');
        for ($k = 0; $k < count($arr['Surname']); $k++){
            if ($str === $arr['Surname'][$k]){
                echo $arr['Name'][$k] . PHP_EOL;
                echo $arr['Surname'][$k] . PHP_EOL;
                echo $arr['Age'][$k] . PHP_EOL;
            }
        }
    }
    
    if ($addOperation === 0) {
        break;
    }
    
}
    














// $arr = [
//     'Name' =>[
//     ],
//     'Surname' =>[
//     ],
//     'Age' =>[
//     ]
// ];
// while(true){
//     echo PHP_EOL . '1. Add user' . PHP_EOL;
//     echo PHP_EOL . '2. Show user list' . PHP_EOL;
//     echo PHP_EOL . '3. Search' . PHP_EOL;
//     echo PHP_EOL . '0. Exit'  . PHP_EOL;
//     $addOperation  = (int) readline('Enter menu item:');
    
//     if ($addOperation === 1){
//         $name = (string) readline('Enter Name: ');
//         $surname = (string) readline('Enter Surname: ');
//         $age = (int) readline('Enter Age: ');   
//         array_push($arr['Name'], $name);
//         array_push($arr['Surname'], $surname);
//         array_push($arr['Age'], $age);
//     }
   
//     if ($addOperation === 2){
//         foreach ($arr as $id => $user){
//             // как сделать все в формате карточки - ФИО на каждого человека?
//                 echo  PHP_EOL . $id . ": " . PHP_EOL;
//                 foreach ($user as $items){
//                     echo  $items. ", ";
//                 }
//         }
//     }
    
//     if ($addOperation === 3){
//         $str = (string) readline('Enter Surname: ');
//         for ($k = 0; $k < count($arr['Surname']); $k++){
//             if ($str === $arr['Surname'][$k]){
//                 echo $arr['Name'][$k] . PHP_EOL;
//                 echo $arr['Surname'][$k] . PHP_EOL;
//                 echo $arr['Age'][$k] . PHP_EOL;
//             }
//         }
//     }
    
//     if ($addOperation === 0) {
//         break;
//     }
    
// }

