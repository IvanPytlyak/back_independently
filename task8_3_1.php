<?php

echo '<a href="/task8_3.php">Главная</a> <br/>';
if (!isset($_SESSION['auth']) || $_SESSION['auth'] === false) {
    echo 'вы не залогинены';
    exit;
}
echo '</br> Вы в личном кабинете';