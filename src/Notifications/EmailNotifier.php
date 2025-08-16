<?php
namespace src\Interfaces;
use src\Models;
class EmailNotifier
{
    public function notify($message)
    {
        echo "Email sent: $message";
    }
}