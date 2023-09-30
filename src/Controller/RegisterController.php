<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class RegisterController extends abstractController{


    public function register(){

        $content = "page d'inscription";
        return $this->render('register.html.twig');
    }
}