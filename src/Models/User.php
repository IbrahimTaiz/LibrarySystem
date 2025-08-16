<?php
namespace src\Models;
abstract class User
{
    protected $name;
    protected $email;
    public function __construct($name,$email)
    {
        $this->name = $name;
        $this->email = $email;
    }
    public function getName()
    {
        return $this->name;
    }
}