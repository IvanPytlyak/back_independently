<?php


if (!isset($_COOKIE['count'])){
   setcookie('count', 1) ;
   $_COOKIE['count'] = 1;
}
else {
   setcookie('count', ++$_COOKIE['count']);
}

echo 'Вы посетили страницу ' . $_COOKIE['count'] . ' раз.';

if ($_COOKIE['count']>=5){
   setcookie('count', "", time()- 60, "/","", 0);
}

