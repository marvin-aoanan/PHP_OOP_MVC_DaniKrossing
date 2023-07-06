<?php

class Person {
    protected $first = "Marv";
    protected $last = "Aoanan";
    protected $age = 40;
    
}

class Pet extends Person {
    public function owner() {
        $a = $this->first;
        return $a;
    }

}