<?php



class User
{   
    private $name;
    private int $surname; // введено число
    private $patronomic;

    public function __construct($name, $surname, $patronomic){
        $this->name = $name;
        $this->surname =$surname;
        $this->patronomic =$patronomic;
    }


    // public function get()
    // {
    //     return  $this->name . ' ' . $this->surname . ' ' . $this->patronomic;   // работает аналогично строке 24 и выводит так же
    // } 

    public function __toString(){
        return  $this->name . ' ' . $this->surname . ' ' . $this->patronomic;
   ;
    }
}

$user = new User('John', 1, "Semenov");
echo $user;
// echo $user->get(); // работает аналогично строке 30