<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends abstractController{


    public function login(){

        $content = "page login";
        return $this->render('login.html.twig');
    }
}