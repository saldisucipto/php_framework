<?php

namespace app\cores;

class Controller
{
    public string $layout = 'main';
    public function render($view, $params = [])
    {
        return Application::$app->router->render_view($view, $params);
    }

    public function set_layout($layout)
    {
        $this->layout = $layout;
    }
}
