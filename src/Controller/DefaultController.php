<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
class DefaultController{

    public function accueil(){

        $content = "page d'accueil";

        return new Response ($content);
    }

}