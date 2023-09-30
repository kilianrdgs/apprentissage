<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends abstractController{

    public function accueil(){

        $logged = false; #simuler une connexion

        if($logged){
            return $this->render('base.html.twig');
        } else{
            return $this->redirectToRoute('login');
        }



    }

}