<?php

namespace LibrarySystem\Models;


class EmailNotifier
{
    public function notify($message)
    {
        echo "Email sent: $message";
    }
}