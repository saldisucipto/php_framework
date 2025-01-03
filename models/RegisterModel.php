<?php

namespace app\models;

use app\cores\Model;

class RegisterModel extends Model
{
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $confirm_password;

    public function register()
    {
        echo "Create User!";
    }

    // harus mengimplementasikan rules 
    public function rules(): array
    {
        // logic validation ada disini 
        return [
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8]],
            'confirm_password' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password'], [self::RULE_MIN, 'min' => 8]],
        ];
    }
}