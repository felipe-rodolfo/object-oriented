<?php

namespace app\classes;

class Login {

    public $email ;
    public $password;

    public function auth(){
        return "o meu email é " . $this->email .  " e minha senha é " .  $this->password;
    }

}