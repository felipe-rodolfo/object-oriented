<?php

namespace app\classes;

class Crud
{

    public $field = 'fields test';

    public function read(){
        return $this->field;
    }
}