<?php

namespace App\Controller;

use App\Form\Type\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EmtController extends AbstractController
{
    /**
     * @Route("/emt", name="emt")
     */
    public function index()
    {
        /*$login= new login();
        $form=$this->createForm(LoginType::class, $login);*/
        return $this->render('emt/index.html.twig', [
            'controller_name' => 'EmtController'
        ]);
    }
}
