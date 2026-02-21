<?php

interface Payable{
    public function payer($montant);
    public function rembourser($montant);

    public function Notifiable($message);

}