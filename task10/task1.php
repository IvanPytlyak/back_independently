<?php


include_once('class1.php');

$user_1 = new Employee();
$user_1->setName('John')->setSalary(1500)->setAge(20);
// print_r ($first);


$user_2 = new Employee();
$user_2->setName('Eric')->setSalary(2000)->setAge(26);


echo 'Сумма зарплат = ' . $user_1->getSalary() + $user_2->getSalary() . '</br></br>';
echo 'Сумма возрастов = ' . $user_1->getAge() + $user_2->getAge() . '</br></br>';
echo '</br></br>Задача 5, 10 : ' . $user_1->getAge(); // задача 5

echo '</br></br>Задача 5 : ' . $user_1->verificationAge(); // задача 5



$user_1->setAge(30); // Задача9
echo '</br></br>Задача 9: ' . $user_1->getAge() . '</br></br>'; 

echo '</br></br>Задача 11, двойная зарплата user_1 = ' . $user_1->doubleSalaryGet() . '</br></br>'; 

$first = new Rectangle;
$first->setHeigth(5)->setWidth(10);
print_r($first->getSquare()); 
echo '</br></br>';
print_r($first->getPerimeter());


// '</br></br>Задача 13, площадь прямоугольника first = ' .    . '</br></br>'