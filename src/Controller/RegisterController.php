<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class RegisterController{


    public function register(){

        $content = "page d'inscription";
        return new Response($content);
    }
}