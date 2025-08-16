<?php
trait LoggerTrait
{
    public function log($message)
    {
        echo "[LOG] $message<br>";
    }
}