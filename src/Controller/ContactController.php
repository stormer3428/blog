<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', []);
    }

    /**
     * @Route("/contact/{city}", name="contactWithCity")
     */
    public function Cities(string $city): Response
    {
        return $this->render('contact/index.html.twig', [
            'city' => $city,
        ]);
    }
}
