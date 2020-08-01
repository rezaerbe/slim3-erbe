<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;

use Slim\Views\Twig as View;

class AuthController extends Controller {

    public function getSignUp($request, $response) {

        return $this->view->render($response, 'auth/signup.twig');
    }

    public function postSignUp() {

    }
}