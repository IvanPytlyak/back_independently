<?php

interface iMessenger
{
    function send($message);
}
function sendMessage(iMessenger $messenger, $text)
{
    $messenger->send($text);
}
 
class EmailMessenger implements iMessenger 
{
    function send($message)
    {
        echo "Отправка сообщения на email: $message";
    }
}
$outlook = new EmailMessenger();
sendMessage($outlook, "Hello World");