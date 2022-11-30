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
        foreach ($arr as $id => $user){
            // как сделать все в формате карточки - ФИО на каждого человека?
                echo  PHP_EOL . $id . ": " . PHP_EOL;
                foreach ($user as $items){
                    echo  $items. ", ";
                }
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
    















// while(true){
//     echo '1. Add user' . PHP_EOL;
//     echo '2. Show user list' . PHP_EOL;
//     echo '3. Search' . PHP_EOL;
//     echo '0. Exit'  . PHP_EOL;
    
//     $users=[];
//     $names=[];
//     $surnames=[];
//     $ages=[];
    
//     $addOperation  = (int) readline('Enter menu item:');
    
    
//     if ($addOperation === 1){
//         $name = (string) readline('Enter Name: ');
//         $surname = (string) readline('Enter Surname: ');
//         $age = (int) readline('Enter Age: ');
        
//         $users[] = [
//             'Name' => $names,
//             'Surname' => $surnames,
//             'Age' => $ages
//         ];
//         array_push($names, $name);
//         array_push($surnames, $surname);
//         array_push($ages, $age);
//         array_push($users['Name'], $names);
//         array_push($users['Surname'], $surnames);
//         array_push($users['Age'], $ages);
    
//     }
//     var_dump ($users);
    
    
//     if ($addOperation === 2){
    
//         foreach ($users as $id => $user){ 
//             echo $id . ' ' . $user['Name'] . PHP_EOL;
//             echo $id . ' ' . $user['Surname'] . PHP_EOL;
//             echo $id . ' ' . $user['Age'] . PHP_EOL;
//             }
//         }
    
    
    
//     if ($addOperation === 3){
        
//     $str = (string) readline('Enter Surname: ');
//     $arr = ['sdfgrf', 'fefdfdf', 'word', 'gtrwwwww'];
    
//     for ($k = 0; $k < count($arr[1]); $k++){
//         if ($str === $arr[$k]){
//             echo 'index: ' . $k . PHP_EOL;
//             break;
//         }
//     }
    
    
//     }
    
    
//     if ($addOperation === 0) {
//         break;
//     }
    
//     }
    





 // foreach ($arr as $id => $user) {
        //     echo $id . ': ' . $user['Name'] . $user['Surname'] . $user['Age'] . PHP_EOL; 
        // }


  // foreach ($user as $items){
                //     for ($j = 0; $j < count($user); $j++){
                //         if (count($user) === 0){
                //             echo $user[$j] . PHP_EOL;
                //         }
                //         else {
                //             echo $user[$j] . ', ';
                //         }
                //     }
                // }


