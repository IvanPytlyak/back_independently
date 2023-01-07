<!-- к основной задаче -->
<form   action="/task7_4.php" method="post">
    ПОИСК
<br>
    User: 
    <br>
    <input type="text" name="users" placeholder="Ivan" value="">
    <br>
    Login: <br>
    <input type="text" name="login" placeholder="ivan@mail.ru" value="">
    <br>
    Password:
    <br>
    <input type="password" name="password" value="">
    <br>
    <br>
    <input id="first_form" type="submit" value="Submit">
</form>


<!-- дополнительная для заполнения массива -->
<!-- <form   action="/task7_4.php">
    Ввод данных
<br>
    User: <br>
    <input type="text" id="user_enter" name="users_enter" placeholder="Ivan" value="">
    <br>
    Login: <br>
    <input type="text" id="login_enter"  name="login_enter" placeholder="Ivan" value="">
    <br>
    Password:
    <input type="password" id="password_enter" name="password_enter" value="">
    <br>
    <br>
    <input id="second_form" type="submit" value="Submit">
</form> -->

<!-- ДОП -->
<script>
let elem = document.getElementById('second_form');
let users = document.getElementById('user_enter');
let login = document.getElementById('login_enter');
let pass = document.getElementById('password_enter');

elem.addEventListener('click', function(){
     arr['login'].push(users.value); 
     arr['password'].push(login.value);
     arr['users'].push(pass.value);
    //  как увязать два массива arr из js и php?
    // как задать условие - пушить только если все элементы заполнены
})
// если возможно обойтись без js то как сделать обработчик кнопки для заполнения массива на php?
</script>



<?php
// РЕШЕНИЕ ПОСТАВЛЕННОЙ ЗАДАЧИ стр.57-80;
// массив для заполнения
$arr = [
    'login' =>[
        'ivan@mail.ru'
    ],
    'password' =>[
        '123456'
    ],
    'users' =>[
        'Ivan'
    ]
];

    if ($arr['login'][0] === $_POST['login']){  
        if ($arr['password'][0] === $_POST['password']){
            echo $_POST['users'] . ': Пароль введен верно' . PHP_EOL;
        }
        else {
            echo 'Пароль введен не верно' . PHP_EOL;
        }
    }
    else{
        echo 'Логин не существует';
}

//ДОП перебор по-элементно
// foreach ($arr as $user){
//     for ($i=0; $i< count($user); $i++){
        
//         if ($user['login'][$i] === $_POST['login']){  
//             if ($user['password'][$i] === $_POST['password']){
//                 echo $_POST['users'][$i] . ': Пароль введен верно' . PHP_EOL;
//             }
//             else {
//                 echo 'Пароль введен не верно' . PHP_EOL;
//             }
//         }
//         else{
//             echo 'Логин не существует';
//     }
//     }

// }













    





// $arr = [
//     'login' =>[
//         'ivan@mail.ru'
//     ],
//     'password' =>[
//         123456
//     ],
//     'users' =>[
//         'Ivan'
//     ]
// ];

// if ($arr['login'] === $_POST['login']){  // как итерировать login если их будет несколько?
//     if ($arr['password'] === $_POST['password']){
//         echo $_POST['users'] . ': Пароль введен верно' . PHP_EOL;
//     }
//     else {
//         echo 'Пароль введен не верно' . PHP_EOL;
//     }
// }
// else{
//     echo 'Логин не существует';
// }

