<?php
require '../vendor/autoload.php';

use app\classes\Login;
use app\classes\Crud;

$login = new Login();
$crud = new Crud();

$login->email = 'felipe@email.com';
$login->password = '123';

echo $login->auth();

echo $crud->read();