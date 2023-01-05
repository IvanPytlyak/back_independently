<?php

// дает возможность отображать заполнять данные при свойстве private
class User
	{
		private $name;
		private $age;
		
        function __set($property, $value){
            if ($property ==='name'){
                $this->$property = $value;
            }
            if ($property === 'age'){
                if ($value >= 0 and $value <= 70) { // проверяем возраст
                    $this->$property = $value;
                }
            }
            // else {
            //    echo "Ошибка"; 
            // }
        }

        function __get($property){
            return  $this->$property;
        }
	}


    $test = new User; // почему подсвечивает?
	
	$test->name = 'Ivan'; 
	$test->age = 30; 
	
	echo $test->name;
    echo '</br></br>'; 
	echo $test->age; 

























// ТЕОРИЯ
// class Test
// {
//     private $prop1;
//     private $prop2;
    
//     // public function __set($property, $value)
//     // {
//     //     $this->$property = $value;
//     // }
    
//     public function __set($property, $value){
//         $arr =[['prop1', 'prop2']]; // перечень разрешенных свойств
//         // if ($property === 'prop1' || $property === 'prop2'){
//         if (in_array($property, $arr)){
//             $this->$property= $value;
//         }
//     }



//     // Магический геттер свойств:
//     public function __get($property)
//     {
//         return $this->$property;
//     }
// }

// $test = new Test;
	
// $test->prop1 = 1; // запишем 1
// $test->prop2 = 2; // запишем 2

// echo $test->prop1; // выведет 1
// echo $test->prop2; // выведет 2




// Через Swith case

// class Test
// 	{
// 		private $prop1;
// 		private $prop2;
		
// 		public function __set($property, $value)
// 		{
// 			switch($property) {
// 				case 'prop1':
// 					// Если prop1 от 0 до 10:
// 					if ($value > 0 and $value < 10) {
// 						$this->$property = $value;
// 					}
// 				break;
// 				case 'prop2':
// 					// Если prop2 от 10 до 20:
// 					if ($value > 10 and $value < 20) {
// 						$this->$property = $value;
// 					}
// 				break;
// 				default:
// 					// Такого свойства нет
// 				break;
// 			}
// 		}
		
// 		public function __get($property)
// 		{
// 			return $this->$property;
// 		}
// 	}