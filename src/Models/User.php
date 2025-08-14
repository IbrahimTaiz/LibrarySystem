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

        public function getName(): string
    {
        return $this->name;
    }
        public function getEmail(): string
    {
        return $this->email;
    }
        public function getPassword(): string
    {
        return $this->password;
    }
}
?>