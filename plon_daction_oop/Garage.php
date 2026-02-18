<?php

class Garage{
    static private int $nbGarages =0;
    static private array $voitures =[];

    public function __construct()
    {
        self::$nbGarages++;
    }


    public function ajouterVoiture($Voiture){
        self::$voitures[] =$Voiture;
    }

    public function retirerVoiture($Voiture){
        if(self::$voitures == $Voiture){
            return true;
        }else{
            return false;
        }
    }

    public function listerVoitures(){
        return self::$voitures;
    }

    public static function getNbGarages(){
        return self::$nbGarages;
    } 

}

$g1 = new Garage();
$g1->ajouterVoiture("mresidese");
print_r($g1->listerVoitures());
echo Garage::getNbGarages();