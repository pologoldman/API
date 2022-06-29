<?php

namespace App\Controller;

use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'default_index')]
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    #[Route('/faq', name: 'default_faq')]
    public function faq(): Response
    {
        return $this->render('default/faq.html.twig', [
            'controller_name' => 'Noob',
        ]);
    }

    #[Route('/SayMyName/{name}', name: 'default_SayMyName', requirements: ['name' => '\w+'])]
    public function sayMyName($name): Response{
        return $this->render('default/saymyname.html.twig', [
            'name' => $name
        ]);
    }
}