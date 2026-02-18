<?php

require_once "plon_daction_oop\Voiture.php";
class VoitureElectrique extends Voiture{
    protected int $autonomieKm;

    public function __construct($marque, $modele, $kilometrage,$autonomieKm)
    {
        parent::__construct($marque, $modele, $kilometrage);
        $this->autonomieKm = $autonomieKm;
    }

    public function decrire(){
        echo $this->marque ." ".$this->modele." _ ".$this->kilometrage." Km | AutonomieKm :".$this->autonomieKm;
    }


}

$v1 = new Voiture("Toyota", "Yaris", 15000);
echo $v1->decrire();
echo "\n";
$v2 = new VoitureElectrique("Tesla", "Model 3", 5000, 400);
echo $v2->decrire();
