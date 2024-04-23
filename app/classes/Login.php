<?php

class Login {

    public $email ;
    public $password;

    public function logar(){
        return "o meu email é " . $this->email .  " e minha senha é " .  $this->password;
    }

}