<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    public function index(): Response
    {
        $nickname = null;
        if(!is_null($this->getUser())){
            $nickname = $this->getUser()->getNickname();
        }

        return $this->render('homepage.html.twig', [
            "nickname"  => $nickname
        ]);
    }


}
