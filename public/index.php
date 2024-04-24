<?php
declare(strict_types=1);

use app\classes\Person;
use app\classes\User;

require '../vendor/autoload.php';

$user = new User();

echo $user->info();