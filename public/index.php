<?php
declare(strict_types=1);

require '../vendor/autoload.php';

use app\classes\Login;



try {
    $login = new Login();
    echo $login->auth('felipe@email.com', 123);
} catch(TypeError $e){
    echo $e->getMessage();
}
