<?php

namespace app\controllers;

use app\cores\Application;

class SiteController
{

    public function home()
    {
        $params = [
            'name' => 'Saldi Sucipto',
        ];
        return Application::$app->router->render_view('home', $params);
    }

    public function contact()
    {
        $params = [
            'name' => 'Saldi Sucipto',
        ];
        return Application::$app->router->render_view('contact', $params);
    }
    public function handle_contact()
    {
        return "Handling Data";
    }
}
