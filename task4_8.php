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
    echo '1. Add user' . PHP_EOL;
    echo '2. Show user list' . PHP_EOL;
    echo '3. Search' . PHP_EOL;
    echo '0. Exit'  . PHP_EOL;
    $addOperation  = (int) readline('Enter menu item:');
    
    if ($addOperation === 1){
        one ($arr);
    }
   
    if ($addOperation === 2){
        two ($arr);
    }

    
    if ($addOperation === 3){
        three ($arr);
    }
    
    if ($addOperation === 0) {
        break;
    }
    
}

function one (&$arr){
    $name = (string) readline('Enter Name: ');
        $surname = (string) readline('Enter Surname: ');
        $age = (int) readline('Enter Age: ');   
        array_push($arr['Name'], $name);
        array_push($arr['Surname'], $surname);
        array_push($arr['Age'], $age);
        return $arr;
}

function two (&$arr) {
    for ($j = 0; $j < count($arr['Name']); $j++) {
        echo sprintf('%s: Имя:%s Фамилия:%s Возраст:%s', $j+1 , $arr['Name'][$j], $arr['Surname'][$j], $arr['Age'][$j]) . PHP_EOL;
    }
}    


function three (&$arr) {
    $str = (string) readline('Enter Surname: ');
            for ($k = 0; $k < count($arr['Surname']); $k++){
                if ($str === $arr['Surname'][$k]){
                    echo 'Name: ' . $arr['Name'][$k] . PHP_EOL;
                    echo 'Surname: ' . $arr['Surname'][$k] . PHP_EOL;
                    echo 'Age: ' . $arr['Age'][$k] . PHP_EOL;
                }
            }
}