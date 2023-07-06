<?php

class Person {
    //Properties
    private $name;
    private $eyeColor;
    private $age;

    //Static Property
    public static $drinkingAge = 18;

    // Constructors
    public function __construct($name, $eyeColor, $age) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    // Methods set Props
    public function setName($name) {
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