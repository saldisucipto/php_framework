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

    public function validate()
    {
    }
}