<?php

namespace app\cores;

use app\cores\Router;
use app\cores\Response;

class Application
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;
    public Controller $controller;

    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->response = new Response();
        $this->request = new Request();
        $this->router = new Router($this->request, $this->response);
        $this->controller = new Controller();
    }


    // getter controller 
    public function get_controller()
    {
        return $this->controller;
    }

    public function set_controller(Controller $controller)
    {
        $this->controller = $controller;
    }



    public function run()
    {
        echo $this->router->resolve();
    }
}
