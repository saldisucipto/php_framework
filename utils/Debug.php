<?php

namespace app\utils;

class Debug
{
    public static function debug_data($data)
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        exit;
    }
}
