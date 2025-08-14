<?php

namespace LibrarySystem\Models;

trait TimestampTrait
{
    public function date_now(): string
    {
        return date('Y-m-d');
    }
}