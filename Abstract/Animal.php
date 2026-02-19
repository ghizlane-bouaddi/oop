<?php

abstract class Animal{

    protected string $name;
   

    public function __construct($name)
    {
        $this->name =$name;
    }

    abstract public function parler();

    public function senAnimal(){
        return "je suis".$this->name. ":". $this->parler();
    }
}