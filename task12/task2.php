<?php

use back_independently\task12\Uber;

class Student extends Uber
{
    private $course;
    public function setCourse($course){
        $this-> course =$course;
    }
    public function getCourse(){
        return $this->course;
    }
}

$child = new Uber;
$child->setAge(29);
echo $child->getAge();