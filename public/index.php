<?php
declare(strict_types=1);

require '../vendor/autoload.php';

class Template {

    const PATH = 'app/views/';

    
}

class Twig extends Template
{
    const PATH = 'app/views/twig';

    public function load()
    {
        return static::PATH;
    }
}

echo (new Twig)->load();