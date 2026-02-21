<?php

require_once "interfase\Notifiable.php";
require_once "interfase\NotificationService.php";
require_once "interfase\EmailNotification.php";
require_once "interfase\SlackNotification.php";
require_once "interfase\SMSNotification.php";

$Notfecation =new NotificationService("Http ");
echo $Notfecation->envoyer(" ri mxrl");