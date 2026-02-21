<?php

class NotificationService implements Notifiable{
    protected int $id;
    protected string $server;

    public function __construct($server)
    {
        $this->server=$server;
    }

    public function envoyer(string $message)
    {
         echo "server".$this->server .$message;
    }
}