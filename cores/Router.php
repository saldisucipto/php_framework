<?php

namespace app\cores;

use app\cores\Response;

class Router
{
    public Request $request;
    protected array $routes = [];
    public Response $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }


    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            $this->response->set_status_code(404);
            return $this->render_view("_404");
        }
        if (is_string($callback)) {
            return $this->render_view($callback);
        }
        if (is_array($callback)) {
            // var_dump($callback);
            $callback[0] = new $callback[0]();
        }
        return call_user_func($callback, $this->request);
    }

    public function render_view($view, $params = [])
    {
        $layoutContent = $this->layout_content();
        $viewContent = $this->render_only_view($view, $params);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function render_content($view_content)
    {
        $layoutContent = $this->layout_content();
        return str_replace('{{content}}', $view_content, $layoutContent);
    }

    protected function layout_content()
    {
        ob_start();
        include_once Application::$ROOT_DIR . "/views/layouts/main.php";
        return ob_get_clean();
    }

    protected function render_only_view($view, $params)
    {
        ob_start();
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        include_once Application::$ROOT_DIR . "/views/$view.php";
        return ob_get_clean();
    }
}
