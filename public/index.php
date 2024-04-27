<?php
declare(strict_types=1);

require '../vendor/autoload.php';

abstract class Database {
    protected $host;
    protected $username;
    protected $password;
    protected $databaseName;
    protected $connection;

    public function __construct($host, $username, $password, $databaseName) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->databaseName = $databaseName;
    }

    abstract protected function connect();
    abstract protected function query($sql);
    abstract protected function close();
}

class MySQLDatabase extends Database {
    public function connect() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->databaseName);

        if($this->connection->connect_error){
            die("Connection failed: ". $this->connection->connect_error);
        }
    }

    public function query($sql){
        $result = $this->connection->query($sql);
        return $result;

        if(!$result){
            die("Query failed: ". $this->connection->error);
        }

        return $result;
    }

    public function close() {
        $this->connection->close();
    }

}

$mysqlDatabase = new MySQLDatabase('localhost', 'username', 'password', 'test');

$mysqlDatabase->connect();
$sql = "SELECT * FROM users";
$result = $mysqlDatabase->query($sql);
$mysqlDatabase->close();