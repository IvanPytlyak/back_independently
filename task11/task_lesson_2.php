<?php

class User {
    public string $name;
    
    public function setName (string $name){
        $this-> name=$name;
        return $this;
    }
    

    public function __call($name){
        
    }
}