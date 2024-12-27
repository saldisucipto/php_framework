<?php

namespace app\controllers;

use app\cores\Controller;
use app\cores\Request;
use app\models\RegisterModel;
use app\utils\Debug;

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
        $errors = [];
        $register_model = new RegisterModel();

        if ($request->isPost()) {
            $register_model->load_data(data: $request->getBody());
            // Debug::debug_data($register_model);
            if ($register_model->validate() && $register_model->register()) {
                return 'Success';
            }
            // Debug::debug_data($register_model->errors);
            return $this->render(
                'register',
                ['model' => $register_model,]
            );
        }
        $this->set_layout('auth');
        return $this->render('register', [
            'errors' => $errors,
            'model' => $register_model,
        ]);
    }
}