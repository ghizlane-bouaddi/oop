<?php

class EmailNotification implements Notifiable{
    protected int $id;

    protected string $email;

    public function __construct($email)
    {
        $this->email =$email;
    }

    public function envoyer(string $message)
    {
        echo "email".$this->email.$message;
    }
}

