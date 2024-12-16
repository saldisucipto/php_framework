<?php

namespace app\cores;

class Request
{
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? false;   // Mengemabil variable pada global server 
        $position = strpos($path, '?'); // mengabaikan parameter URL
        if ($position === false) {
            return $path;
        }
        return $path = substr($path, 0, $position,);
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
