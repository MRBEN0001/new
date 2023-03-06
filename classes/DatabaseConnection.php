<?php

class DatabaseConnection
{
    private $dsn = 'mysql:dbname=reg_login_system;host=127.0.0.1';
    private $user = 'root';
    private $password = "";

    protected function connect()
    {
        $pdo = new PDO($this->dsn, $this->user, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
