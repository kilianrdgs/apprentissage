<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class LoginController{


    public function login(){

        $content = "page login";
        return new Response ($content);
    }
}