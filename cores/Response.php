<?php

namespace app\cores;

class Response
{
    public function set_status_code(int $code)
    {
        http_response_code($code);
    }
}
