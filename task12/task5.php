<?php

use Student as GlobalStudent;

class Student
{
    public $name;
    public $course;

    public function setName($name){
        $this->name = $name;
        return $this;
    }
    public function setCourse($course){
        $this->course = $course;
        return $this;
    }
    public function getName(){
        return $this->name;
    }
    public function getCourse(){
        return $this->course;
    }
    public function transferToNextCourse(){
        if ($this-> isCourseCorrect()){
        return $this-> getCourse()+1;
        }
    }
    private function isCourseCorrect(){
        if ($this-> getCourse()>=1 && $this-> getCourse()<=5){
            return true;
        }
    }

}

$ivan = new Student;
$ivan->setName('Ivan')->setCourse(3);
echo $ivan->getName() . ' current curse :  ' . $ivan->getCourse() . ' next course : ' . $ivan->transferToNextCourse() ;