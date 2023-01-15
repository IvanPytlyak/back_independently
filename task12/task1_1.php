<?php

use back_independently\task12\Uber; // без этого тоже сыпет ошибку

class Employee extends Uber
{
  
    private $salary; 
    
    public function setSalary($salary)
	{
		$this->salary = $salary;
	}
    public function getSalary()
    {
        return $this->salary;
    }
}

$test = new Employee;
$test->setName('Ivan');
$test->setAge(30);
$test->setSalary(1000);


echo $test->getName();
echo $test->getAge();
echo $test->getSalary();

