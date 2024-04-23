<?php
require '../vendor/autoload.php';

use app\classes\Crud;
//use app\classes\Login;
//$login = new Login();
//$login->email = 'felipe@email.com';
//$login->password = '123';
//echo $login->auth();

$crud = new Crud();

echo $crud->read();