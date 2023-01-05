<?php

class Obj {
   public string $name;
   public int $age;
   public string $logtime;
   
   function __construct(string $name, int $age, string $logtime){
        $this->age= $age;
        $this->name = $name;
        $this->logtime = $logtime;
   }
 
 
   public function __destruct()
   {
      echo 'Объект удаляется' . (new DateTime())->format('Y-m-d H:m:s');  //1 раз
      $file = fopen($this -> name .'txt', 'a+');
      fclose($file);
   }
  
   public function __toString()
   {
    return sprintf(
        'Name: %s | Age: %s | User created time: %s',
        $this->name,
        $this->age,
        $this->logtime,
        PHP_EOL
    );
   }

}
echo '</br></br>';
$first = new Obj('Ivan', 30, (new DateTime())->format('Y-m-d H:m:s')); // 2 раз время удаление 
echo '</br></br>';
$second = new Obj('Alexei', 24, (new DateTime())->format('Y-m-d H:m:s'));
echo '</br></br>';

echo $first;