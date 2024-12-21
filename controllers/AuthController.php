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
        $this->set_layout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->isPost()) {
            return "Handle submited data";
        }
        $this->set_layout('auth');
        return $this->render('register');
    }
}
