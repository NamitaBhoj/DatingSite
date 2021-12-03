<?php

abstract class Database
{
    private const _SERVERNAME = "localhost";
    private const _PORT = 3307;
    private const _DATABASE = "datingsite";
    private const _USERNAME = "project";
    private const _PASSWORD = "project";
    private const _CONNECTIONSTRING = "mysql:host=" . Database::_SERVERNAME . ";dbname=" . self::_DATABASE . ";port=" . self::_PORT;

    private PDO $_connection;

    public function __construct()
    {
        try {
            $this->_connection = new PDO(self::_CONNECTIONSTRING, self::_USERNAME, self::_PASSWORD);
            $this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection Failed: {$exception->getMessage()}";
            die("Connection to DB Failed");
        }
    }

    protected function execute(string $query): array|false
    {
        $stmt = $this->_connection->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

    protected function registerUser(string $query, array $userDetails): array|false
    {
        $stmt = $this->_connection->prepare($query);
        $stmt->execute($userDetails);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

    protected function message(string $query, array $sendMessage): array|false
    {
        $stmt = $this->_connection->prepare($query);
        $stmt->execute($sendMessage);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}