<?php

namespace app\models;

use app\cores\Model;

class RegisterModel extends Model
{
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $password_confirmation;

    public function register()
    {
        echo "Create User!";
    }
}
