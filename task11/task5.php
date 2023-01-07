<?php


class User
{
    private $name;
    private $age;

    public function __call($name, $arguments){
        if ($name === 'setName' || $name === 'setAge'){
            if ($name === 'setName'){
                return $this-> name= $arguments[0] ;
            }
            if ($name === 'setAge'){
                return $this->age = $arguments[0];
            } 
        }
        
        elseif ($name === 'getName' || $name === 'getAge'){
            if ($name === 'getName'){
                return $this->name;
            }
            if ($name === 'getAge'){
                return $this->age;
            } 
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



