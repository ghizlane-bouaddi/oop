<?php


class SlackNotification implements Notifiable{
    protected int $id;
    protected string $slack;

    public function __construct($slack)
    {
        $this->slack=$slack;
    }

    public function envoyer(string $message)
    {
        echo "slack".$this->slack .$message;
    }
}