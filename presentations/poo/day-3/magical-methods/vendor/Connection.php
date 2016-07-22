<?php

class Connection
{
    protected $link;
    private $username, $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->connect();
    }

    private function connect()
    {
//        $this->link = new PDO($this->dsn, $this->username, $this->password);
    }

    public function __sleep()
    {
        return array('username', 'password');
    }

    public function __wakeup()
    {
        $this->connect();
    }
}
