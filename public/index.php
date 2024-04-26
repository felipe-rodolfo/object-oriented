<?php
declare(strict_types=1);

require '../vendor/autoload.php';

class User 
{
    public static string $name;
    
    public static function userInfo()
    {
        return __CLASS__;
    }

    public function teste()
    {
        return self::userInfo();
    }
   
}

class User2 extends User 
{
    public static function userInfo()
    {
        return __CLASS__;
    }
}

echo User::userInfo();

$user2 = new User2;
echo $user2->teste();