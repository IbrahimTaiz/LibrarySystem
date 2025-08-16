<?php
namespace src\Traits;
trait src\TimestampTrait
{
    public function currentTimestamp()
    {
        return date('Y-m-d H:i:s');
    }
}