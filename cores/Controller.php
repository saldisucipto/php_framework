<?php

namespace app\cores;

class Controller
{
    public function render($view, $params = [])
    {
        return Application::$app->router->render_view($view, $params);
    }
}
