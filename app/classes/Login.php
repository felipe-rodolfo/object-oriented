<?php

namespace app\classes;

class Login {

    // public string $email ;
    // public string $password;

    public function auth($email, $password): string
    {
        return "o meu email é " .  $email .  " e minha senha é " .   $password;
    }

}