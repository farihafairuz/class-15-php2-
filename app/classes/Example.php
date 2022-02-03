<?php

namespace App\classes;

class Example
{
    public $firstNumber=10;
    public $firstName;
    public $lastName;
    public function index()
    {
//        echo "Goodbye World";
//        $firstNumber=20;
//        echo $firstNumber;
        $this->firstName="Fairuz";
        $this->lastName="Hera";
        echo $this->firstNumber;
        echo '</br>';
        echo $this->firstName;
        echo '</br>';
        echo $this->lastName;
        echo '</br>';
        echo $this->firstName.' '.$this->lastName;


    }

}