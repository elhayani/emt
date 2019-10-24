<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EmtController extends AbstractController
{
    /**
     * @Route("/emt", name="emt")
     */
    public function index()
    {
        return $this->render('emt/index.html.twig', [
            'controller_name' => 'EmtController',
        ]);
    }
}
