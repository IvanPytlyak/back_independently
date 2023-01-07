<?php


session_start();
$openFile = fopen('coutn_t4.txt', 'w+');

if (!isset($_SESSION['coont'])){
    $_SESSION['coont']=1; // почему есть момент, когда счетчик = 0?
}
else{
    $_SESSION['count']++;
    fwrite($openFile, $_SESSION['count']);
}
echo 'Вы посетили страницу ' . $_SESSION['count'] . ' раз';


if ($_SESSION['count']>=3){
    session_destroy();
}


