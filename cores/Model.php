<?php

namespace app\cores;

abstract class Model
{
    // Property untuk validate 
    public const RULE_REQUIRED = 'required';
    public const RULE_EMAIL = 'email';
    public const RULE_MIN = 'min';
    public const RULE_MAX = 'max';
    public const RULE_MATCH = 'match';

    public function load_data($data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }

    // abstract function yang harus di implementasi di child classs 
    /**
     * Summary of rules
     * @return array
     */
    abstract public function rules(): array;

    public array $errors = [];

    public function validate()
    {
        // Menangkap validate rules 
        foreach ($this->rules() as $attribute => $rules) {
            $value = $this->{$attribute};
            foreach ($rules as $rule) {
                $rule_name = $rule;
                if (!is_string($rule_name)) {
                    $rule_name = $rule[0];
                }
                if ($rule_name == self::RULE_REQUIRED && !$value) {
                    $this->add_error($attribute, self::RULE_REQUIRED);
                }
                if ($rule_name === self::RULE_EMAIL && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->add_error($attribute, self::RULE_EMAIL);
                }
                if ($rule_name === self::RULE_MIN && strlen($value) < $rule['min']) {
                    $this->add_error($attribute, self::RULE_MIN, $rule);
                }
                if ($rule_name === self::RULE_MAX && strlen($value) < $rule['max']) {
                    $this->add_error($attribute, self::RULE_MAX, $rule);
                }
                if ($rule_name === self::RULE_MATCH && $value !== $this->{$rule['match']}) {
                    $this->add_error($attribute, self::RULE_MATCH, $rule);
                }
            }
        }

        return empty($this->errors);
    }

    public function add_error(string $attribute, string $rule, $params = [])
    {
        $message = $this->error_message()[$rule] ?? "";
        foreach ($params as $key => $value) {
            $message = str_replace("{$key}", $value, $message);
        }
        $this->errors[$attribute][] = $message;
    }

    public function error_message()
    {
        return [
            self::RULE_REQUIRED => "Field Ini Harus Di Isi!",
            self::RULE_EMAIL => "Field Ini Harus Berupa Email!",
            self::RULE_MIN => "Minimum harus memiliki min digits!",
            self::RULE_MAX => "Maximum harus memiliki max digits!",
            self::RULE_MATCH => "Field ini harus sama dengan field match!",
        ];
    }

    public function has_errors($attribute)
    {
        return $this->errors[$attribute] ?? false;
    }

    public function get_first_errors($attribute)
    {
        return $this->errors[$attribute][0] ?? false;
    }
}