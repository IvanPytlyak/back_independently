<?php


class User
{
    private $name;
    private $age;

    public function __call($name, $arguments){
        if ($name === 'setName' || $name === 'setAge'){
            $this->$name = $arguments[0];
        }
        if ($name === 'getName' || $name === 'getAge'){
            print_r ($arguments);
        }
        else {
            echo 'невозможно получить/установить значение';
        }
    }
}


$user= new User;
$user->setName('Ivan');
$user->setAge(30);
echo $user->getName() . '  -  ' . $user->getAge();



