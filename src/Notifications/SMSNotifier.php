<?php
namespace src\Models;
class SMSNotification
{
    public function notify($message)
        {
        echo "SMS sent: $message<br>";
    }
}