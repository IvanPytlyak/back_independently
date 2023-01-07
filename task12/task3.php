<?php

// use back_independently\task12\Uber; // без этого тоже сыпет ошибку



class Uber
{
    private $name;
    private $age;
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getAge()
    {
        return $this->age;
    }
    
    public function setAge($age)
    {
        $this->age = $age;
    }
}



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


class Programmer extends Employee {
    private array $lengs;
    public function setLanguage($lengs){
        $this->lengs = $lengs;

    }
    public function getLanguage(){
        return $this->lengs;
    }
}

$newProg = new Programmer;
$newProg-> setAge(50);
$newProg->setLanguage(['C++', 'Java']);
print_r ($newProg->getLanguage());