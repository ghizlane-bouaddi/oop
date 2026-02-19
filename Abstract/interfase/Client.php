<?php


require_once "Abstract\interfase\Payable.php";
class Client implements Payable{
    protected int $id;
    protected string $nom;

    protected float $solde;

    public function __construct($nom, $solde)
    {
        $this->nom = $nom;
        $this->solde = $solde;
    }

    public function payer($montant)
    {
        $this->solde -=$montant;
    }

    public function rembourser($montant)
    {
        $this->solde +=$montant; 
    }

    public function Notifiable($message)
    {
        echo "client :".$this->nom .$message. "solde :".$this->solde; 

    }
}

$panyer = new Client("ghizlane",1200000);
echo $panyer->payer(20.00);

echo $panyer->rembourser(100);

$panyer->Notifiable("tma sahb mn rsidkm ");
