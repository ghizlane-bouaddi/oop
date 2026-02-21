<?php

abstract class Animal{

    protected string $name;
    protected int $age;

    public function __construct($name,$age)
    {
        $this->name =$name;
        $this->age =$age;
    }

    abstract public function parler();

    public function senAnimal(){
        return "je suis".$this->name. ":". $this->parler();
    }
}