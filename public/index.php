<?php
declare(strict_types=1);

use app\classes\Person;

require '../vendor/autoload.php';

$person = new Person('Felipe', 'feliperodolfo.midias@gmail.com');

echo $person->email;
echo $person->name;