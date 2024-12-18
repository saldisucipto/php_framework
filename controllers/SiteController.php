<?php

namespace app\controllers;

use app\cores\Application;
use app\cores\Controller;
use app\cores\Request;

class SiteController extends Controller
{

    public function home()
    {
        $params = [
            'name' => 'Saldi Sucipto',
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        $params = [
            'name' => 'Saldi Sucipto',
        ];
        return Application::$app->router->render_view('contact', $params);
    }
    public function handle_contact(Request $request)
    {
        $data = $request->getBody();
        var_dump($data);
        return "Handling Data";
    }
}
