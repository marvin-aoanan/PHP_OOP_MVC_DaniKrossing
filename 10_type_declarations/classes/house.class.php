<?php

class House {
    public $address;

    public function __construct($address)
    {
        $this->address = $address;
    }

    public function getHouse() {
        return $this->address;
    }

    public function setHouse($newAddress) {
        return $this->address =  $newAddress;
    }

}