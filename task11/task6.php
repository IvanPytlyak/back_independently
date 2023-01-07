<?php

class User 
{
    private $name;
    private $surname;
    private $age;
    private $login;
    private $email;

    public function __construct($name, $surname, $age, $login, $email){
        $this->name= $name;
        $this->surname= $surname;
        $this->age= $age;
        $this->login= $login;
        $this->email= $email;

        // $arr = [];
        // array_push($arr, $this->name, $this->surname, $this->age,  $this->login, $this->email);
        // $file = fopen('users.csv', 'a+');
        // fputcsv($file,  $arr, ','); 
        // fclose($file); // запись в файл идет бесконечное количество раз при обновлении страницы
        // fwrite($file,  $this->name); // как установить разделитель данных при записи аналогичный fputcsv($fileOpen, $user, ',');
        // fwrite($file,  $this->surname);
        // fwrite($file,  $this->age);
        // fwrite($file,  $this->login);
        // fwrite($file,  $this->email); 
        
    } 

    public function __toString() 
    {
        $arr = [];
        array_push($arr, $this->name, $this->surname, $this->age,  $this->login, $this->email);
        $file = fopen('users.csv', 'a+');
        fputcsv($file,  $arr, ','); 
        fclose($file);
        return sprintf(
            'Name: %s, Surname: %s, Age: %s, Login: %s, Email: %s ',
            $this->name,
            $this->surname,
            $this->age,
            $this->login,
            $this->email,
            PHP_EOL
        );
            
    }

    public function __get($property){
        if ($property === 'fullinfo'){
            return $this->name . ' ' .  $this->surname . ' ' .  $this->age . ' ' .  $this->login . ' ' .  $this->email;
        }
    }

    public function __destruct()
    {
        // echo 'Учетные данные удалены';
    }        
}
    
$user1 = new User('Ivan', 'Pytlyak', 30, 'toreodor', 'ivan@mail.ru');
echo $user1; // как отобразить весь список свойств не создавая fullinfo на строке 37?
echo '</br></br>'; 
// echo $user1->fullinfo;
echo '</br></br>'; 

$user2 = new User('Alexei', 'Loginov', 25, 'andeano', 'alex@mail.ru');
echo $user2; // get_object_vars Только для private и как отобразить строкой?
echo '</br></br>'; 
// echo $user2->fullinfo;
// решает ли предложенный выше код текущую задачу?