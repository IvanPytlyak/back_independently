<?php

class User_6
{
    private $name;
    protected $age;
    
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

class Student_1 extends User_6
{
    private $course;
    public function setCourse($course){
        $this-> course =$course;
    }
    public function getCourse(){
        return $this->course;
    }
    public function addOneYear(){
        $this->age++;
    }
}

$stud = new Student_1;

$stud->setAge(30);
$stud->setName('Ivan');
echo $stud->addOneYear() . PHP_EOL;
echo $stud->getAge();