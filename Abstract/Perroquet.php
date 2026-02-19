<?php
require_once "Abstract\Animal.php";
require_once "Abstract\Cate.php";
require_once "Abstract\Chien.php";
require_once "Abstract\Perroquet.php";

class Perroquet extends Animal{
     protected string $motFavori;

     public function __construct($name, $age,$motFavori)
     {
        parent::__construct($name, $age);
        $this->motFavori =$motFavori;
     }
    public function parler()
    {
        return $this->motFavori . " " . $this->motFavori . " !";
    }
}

$animaux = [new Chien("Rex",3), new Cate("Minou",5), new Perroquet("Coco",10,"Coucou")];
foreach ($animaux as $a) {
echo $a->senAnimal() . PHP_EOL;
}