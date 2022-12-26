<?php

class Employee {
    public string  $name = '';
    public int  $salary = 0;
    public   $age = 0;
    // public int  $checkage = 0;


    public function setName(string $name){ // this из сеттера = передаваемой в функцию $name? при этом $name из стр.9 и $name из строки 10 разные переменные?
        $this->name = $name;
        return $this;
    }

    public function getName(): string{
        return $this->name;
    }

    public function setSalary(string $salary){
        $this->salary = $salary;
        return $this;
    }

    public function getSalary(): int{
        return $this->salary;
    }

    public function setAge(int $age){
        // if ($this->verificationAge($age)){  //указатель на метод?
            $this->age = $age;
            return $this;   
        // }                                  
        // else  {                             
        //     $this->age = 18;
        //     return $this;
        // } 
    }

    public function getAge(): int{
        return $this->age;
    }

    // public function verificationAge($age){ 
    //     if ($this->$age >= 18) {
    //         return true;
    //     } else {
    //         return false;
    //     }	
    // }

    public function verificationAge(){ // эта функция не может быть вызвана, почему? стату undefined, Задача 5 второй части
			if ($this->age >= 18) {
				return  true;  // выводит 1 , через echo ничего не выводит
			} else {
				return false; // выводит 0
			}	
    }


    public function doubleSalaryGet(){ // задача 11
        return $this->salary*2;
    }  
}


// public function verificationAge($age){ // эта функция не может быть вызвана, почему? стату undefined, Задача 5 второй части
//     if ($this->$age >= 18) {
//         return true;
//     } else {
//         return false;
//     }	
// }








class Rectangle {    // задача 12
    public int $heigth;
    public int $width;
    // public int $square = $heigth*$width;// так, видимо делать нельзя?
    public int $square;

    public function setHeigth(int $heigth) {
        $this->heigth =$heigth;
        return $this;
    }
    public function getHeight(): int {
        return $this->heigth;
    }

    public function setWidth(int $width) {
        $this->width =$width;
        return $this;
    }
    public function getWidth(): int {
        return $this->width;
    }

    public function getSquare(){ 
          $this->square =$this->width*$this->heigth ;
        return $this;
    }
    public function getPerimeter(){ 
        $this->square =$this->width*2 + $this->heigth*2 ;
      return $this;
  }

   
}



