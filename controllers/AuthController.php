<?php

namespace app\controllers;

use app\cores\Controller;
use app\cores\Request;

class AuthController extends Controller
{
    // function login 
    public function login(Request $request)
    {
        if ($request->isPost()) {
            return "Handle Submited Data";
        }
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->isPost()) {
            return "Handle submited data";
        }
        return $this->render('register');
    }
}
