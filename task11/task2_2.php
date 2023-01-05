<?php

// созданые с помощью __get() свойства доступны только для чтения!!!


class User
{
    public $surname;
    public $name;
    public $patronymic;

    public function __get($property){
        if ($property === 'fullname'){
            return $this->name . ' ' .  $this->surname . ' ' .  $this->patronymic;
        }
    } 
}

$user = new User;

$user->surname = 'Иванов';
$user->name = 'Иван';
$user->patronymic = 'Иванович';



echo $user->fullname;