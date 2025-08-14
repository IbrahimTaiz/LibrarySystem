<?php
class Book
{
    private $name;
    private $subject;
    
    public function __construct($n,$s)
    {
        $this->name = $n;
        $this->subject = $s;
    }

}

