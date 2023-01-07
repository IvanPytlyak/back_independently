<?php

// use back_independently\task12\Uber; // без этого тоже сыпет ошибку

use Employee as GlobalEmployee;

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


class Driver extends Employee
{
    private $experience;
    private $category;

    public function setExperience($experience){
        $this->experience =$experience;
    }
    public function setCategory($category){
        $this->category =$category;
    }
    public function getExperience(){
       return $this->experience;
    }
    public function getCategory(){
        return $this->category;
     }
}

$driv = new Driver;
$driv->setExperience(10);
$driv->setCategory('A');
echo $driv->getExperience() . '   ' .$driv->getCategory();