<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MyFirstController extends AbstractController
{
    /**
     * @Route("/my/first", name="my_first")
     */
    public function index()
    {
        return $this->render('my_first/index.html.twig', [
            'controller_name' => 'MyFirstController',
        ]);
    }
}
