<?php
declare(strict_types=1);

require '../vendor/autoload.php';

class Connection
{
    private static $connect = null;

    public static function connect()
    {
        try {
            if(!self::$connect){
                self::$connect = new PDO('mysql:host=localhost;dbname=test', 'root', '');
            }
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }
}
class Model 
{

    protected $connect;

    public function __construct()
    {
        return $this->connect = Connection::connect();
    }

    protected function query($ql)
    {
        $query = $this->connect->query($ql);
        return $query->execute($query);
    }

    protected function prepare($sql, $data)
    {
        $query $this->connect->prepare($sql);
        return $query->execute($data);
    }

    public function all()
    {
        $sql = "select * from {$this->table}";
        $query = $this->connect->query($query);
        $query->execute();
        return $query->fetchAll();
    }

}

class User extends Model
{
    protected $table = 'users';

    public function usersWithAdmin()
    {
        $sql = "select * from {$this->table} where admin = 1";
        $query = $this->connect->query($sql);
        $query->execute();
        return $query->fetchAll();
    }
}

$user = new User();
var_dump($user->usersWithAdmin());