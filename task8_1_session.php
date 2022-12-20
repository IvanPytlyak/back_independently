<?php

session_start();
if (!isset($_SESSION['count'])){
    $_SESSION['count'] = 0;
}
else {
    $_SESSION['count']++;
}
echo 'Вы посетили страницу ' . $_SESSION['count'] . ' раз.';

if ($_SESSION['count']>=5){
    session_destroy();
}