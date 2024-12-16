<?php

namespace app\cores;

class Router
{
    public Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    protected array $routes = [];
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            echo 'Not Found';
            exit;
        }
        if (is_string($callback)) {
            return $this->renderView($callback);
        }
        return call_user_func($callback);
    }

    public function renderView($view)
    {
        $layoutContent = $this->layout_content();
        $viewContent = $this->render_only_view($view);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function layout_content()
    {
        ob_start();
        include_once Application::$ROOT_DIR . "/views/layouts/main.php";
        return ob_get_clean();
    }

    protected function render_only_view($view)
    {
        ob_start();
        include_once Application::$ROOT_DIR . "/views/$view.php";
        return ob_get_clean();
    }
}
