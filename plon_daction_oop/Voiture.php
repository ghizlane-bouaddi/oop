<?php

class Voiture{
    protected string $marque;
    protected string $modele;
    protected int $kilometrage;

    public function __construct($marque,$modele,$kilometrage)
    {
        $this->marque =$marque;
        $this->modele =$modele;
        $this->kilometrage =$kilometrage;
    }

    public function decrire(){
        echo $this->marque ." ".$this->modele." _ ".$this->kilometrage."Km";
    }
}

