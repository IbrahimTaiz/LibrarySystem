<?php

namespace LibrarySystem\Models;


class SMSNotification
{
    public function notify($message)
        {
        echo "SMS sent: $message<br>";
    }
}