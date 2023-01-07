<?php
session_start();
?>

<form   action="/task8_3.php" method="post">
    Авторизация
<br>
    <br>
    Login: <br>
    <input type="text" name="login" placeholder="" value="">
    <br>
    Password:
    <br>
    <input type="password" name="password" value="">
    <br>
    <br>
    <input id="first_form" type="submit" value="Submit">
</form>

<?php
// почему не обязательно начинать сессию и без этого работает?

$arr = [
    [
        'user' => 'Ivan',
        'login' => 'ivan@mail.ru',
        'password' => '123456',
    ],
    [
        'user' => 'tatyana',
        'login' => 'tatyana@mail.ru',
        'password' => '123123',
    ]
];

if (isset($_POST['login']) && isset($_POST['password'])) {
    foreach($arr as $user){
        if ($user['login'] === $_POST['login'] && $user['password'] === $_POST['password']){
            $_SESSION['login'] = $user['login'];
            $_SESSION['user'] = $user['user']; 
            $_SESSION['auth'] = true;
        }
    }
    if (!isset($_SESSION['auth'])) {
        echo 'Неверно задан пароль/логин!'; // 
    }
    else {
        print_r ($_SESSION);
        echo 'Добро пожаловать, ' . $_SESSION['user']; // не выводит имя. Возможно необходимо условие - $_SESSION['auth'] === true?  почему не строка  58?
    }
}
elseif (!isset($_SESSION['auth']) || $_SESSION['auth'] === false){
    echo 'Заполните все необходимые данные для входа';
}

echo '<br/><br/> <a href="/task8_3.php">Главная</a> <br/>';

if (isset($_SESSION['auth']) || $_SESSION['auth'] === true) {
echo '<a href="/task8_3_2(exit).php"> Выход </a>'; // почему ссылка видна даже если я не залогинен?
echo '<br/><a href="/task8_3_1.php"> Личный кабинет </a>';// почему ссылка видна даже если я не залогинен?
// echo 'Добро пожаловать, ' . $_SESSION['name'];  //  почему это условие не тут, а на строке 46
}
