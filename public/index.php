<?php
declare(strict_types=1);

require '../vendor/autoload.php';

class Address {
    private $street;
    private $zipcode;
    private $city;
    private $state;

    public function __construct($street, $zipcode, $city, $state) {
        $this->street = $street;
        $this->zipcode = $zipcode;
        $this->city = $city;
        $this->state = $state;
    }

    public function getAddressInfo()
    {
        return $this->street. " ". $this->zipcode. " ". $this->city. " ". $this->state;
    }
}

// Pessoa tem endenreço
// Pessoa é um endereço

// Pessoa é um animal
// Pessoa tem um animal
class Person {
    private $name;
    private $address;

    public function __construct($name,  $street, $city, $state, $zipcode) {
        $this->name = $name;
        $this->address = new Address($street, $zipcode, $city, $state);
    }

    public function getPersonInfo() {
        return "Name: $this->name, Address: " . $this->address->getAddressInfo();
    }

}

$person = new Person("John Doe", "123 Main St", "Springfield", "IL", "12345");
echo $person->getPersonInfo();