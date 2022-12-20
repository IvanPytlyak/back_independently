<?php
session_start();
echo '<a href="/task8_3.php">Главная</a> <br/>';
if (isset($_SESSION['auth']) || $_SESSION['auth'] === true) {
    session_unset();
    echo 'erwgerer';
}