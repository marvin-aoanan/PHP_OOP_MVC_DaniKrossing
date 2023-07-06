<?php

class NewClass {
    //Properties and Methods goes here
    public $data = "This is a public data";
    public $error;
    public $array;

    // Constructors
    public function __construct($data, $error, $array) {
        $this->data = $data;
        $this->error = $error;
        $this->array = $array;
        echo "This class has been instantaited <br>";
    }
    // Methods | Get property
    public function getProperty() {
        return $this->data;
    }

    // Methods | Set property
    public function setProperty($newdata) {
        $this->data = $newdata;
    }

    //Destructors
    public function __destruct() {
        echo "<br> This is the end of the class!";
    }

}