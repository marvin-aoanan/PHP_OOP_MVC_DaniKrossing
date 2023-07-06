<?php

class Calc {
    public $oper;
    public $num1;
    public $num2;

    public function __construct(string $oper, int $num1, int $num2) {
        $this->oper = $oper;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    //Create a methods to calculate

    public function calculator() {
        switch ($this->oper) {
            case 'add':
                $results =  $this->num1 + $this->num2;
                return $results;
                break;
            case 'sub':
                $results =  $this->num1 - $this->num2;
                return $results;
                break;
            case 'div':
                $results =  $this->num1 / $this->num2;
                return $results;
                break;
            case 'mul':
                $results =  $this->num1 * $this->num2;
                return $results;
                break;
            default:
                echo "Error!";
                break;

        }
    }
}