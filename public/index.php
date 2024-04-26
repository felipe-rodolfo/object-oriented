<?php
declare(strict_types=1);

require '../vendor/autoload.php';

class Person 
{
    public string $name = "Felipe";
    protected int $age = 39;
    private $address = 'my address';

    public function walk()
    {
        echo $this->name. " is walking\n";
    }

    protected function eat()
    {
        return 'eating';
    }

    private function fly()
    {
        return 'flying';
    }
}

class User extends Person
{

}
$user = new User();

$person = new Person();
echo $person->walk();