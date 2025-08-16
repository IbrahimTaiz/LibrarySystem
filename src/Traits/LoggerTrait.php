<?php
namespace src\Traits;
trait src\LoggerTrait
{
    public function log($message)
    {
        echo "[LOG] $message<br>";
    }
}