<?php
class User
{
    protected $name;
    protected $email;
    protected $password;
    public function __construct($n,$e,$p)
    {
        $this->name = $n;
        $this->email = $e;
        $this->password = $p;
    }
}
?>