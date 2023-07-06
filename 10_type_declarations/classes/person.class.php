<?php

class Person {
    //Properties
    private $name;
    private $eyeColor;
    private $age;

    /*
    By using type declaration, we can throw an error if wrong data types is given.
    Works with:
    - class/interface names
    - self (used to reference to same class)
    - array
    - callable
    - bool
    - float
    - int
    - string
    - iterable
    - object
    */

    //Static Property
    public static $drinkingAge = 18;

    // Constructors
    public function __construct($name, $eyeColor, $age) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    // Methods set Props
    public function setName(string $name) {
        $this->name = $name;
    }

    //Methods get Props
    public function getName() {
        return $this->name;
    }

    public static function getDrinkingAge() {
        return self::$drinkingAge;
    }
    //Static Method
    public static function setDrinkingAge($newDrinkAge) {
        self::$drinkingAge = $newDrinkAge;
    }

}