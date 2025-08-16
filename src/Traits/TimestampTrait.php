<?php
namespace src\Traits;
trait TimestampTrait
{
    public function currentTimestamp()
    {
        return date('Y-m-d H:i:s');
    }
}