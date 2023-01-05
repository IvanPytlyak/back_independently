<?php

class Arr 
{
    private $numbers =[];
    public function getToArr($num){
        $this->numbers[]= $num;
        return $this;
    }

    public function __toString()
    {
        return (string) array_sum($this->numbers);
    }
}

$test = new Arr;
echo $test->getToArr(1)->getToArr(2)->getToArr(3);