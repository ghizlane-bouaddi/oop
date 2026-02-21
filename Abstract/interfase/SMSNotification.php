<?php

class SMSNotification implements Notifiable{
    protected int $id;
    protected string $sms;

    public function __construct($sms)
    {
        $this->sms=$sms;
    }

    public function envoyer(string $message)
    {
        echo "SMS".$this->sms .$message;
    }
}