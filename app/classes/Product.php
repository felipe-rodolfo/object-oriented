<?php

namespace app\classes;

class Product
{
    public string $name;
    public string $description;

    public function info(): string
    {
        return $this->name. " - ". $this->description;
    }
}