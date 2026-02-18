<?php

class CompteBancaire{
    private string $titulaire;
    private float $solde;

    public function __construct($titulaire,$soldeInitial)
    {
        $this->titulaire =$titulaire;
        $this->solde =$soldeInitial;
    }


    public function getTitulaire()
    {
        return $this->titulaire;
    }

    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

    }

 
    public function getSolde()
    {
        return $this->solde;
    }

    public function setSolde($solde)
    {
        $this->solde = $solde;

    }

    public function deposer(float $monthon){
        if($monthon >0){
            $this->solde +=$monthon;
            // echo $this->solde;
        }
    }

    public function retirer(float $montant){
        if($this->solde >$montant){
            return true;
        }else {
            return false;
        }
    }

    public function afficherSolde(){
        echo "Compte de  :".$this->titulaire. ":".$this->solde."$";
    }

}


$Compte = new CompteBancaire("AliCe",500.00);
echo $Compte->afficherSolde();
$Compte->deposer(200);
echo "\n";
echo $Compte->getSolde();
echo "\n";
$result = $Compte->retirer(1000);
var_dump($result);