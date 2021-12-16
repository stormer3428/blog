<?php

namespace App\Controller;

use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{

    private $contactRepo;

    public function __construct(ContactRepository $repo)
    {
        $this->contactRepo = $repo;
    }


    /**
     * @Route("/contact", name="contact")
     */
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            "contacts" => $this->contactRepo->findAll(),
        ]);
    }

    /**
     * @Route("/contact/{id}", name="contactId")
     */
    public function Id(string $id): Response
    {
        return $this->render('contact/index.html.twig', [
            'id' => $this->contactRepo->find($id),
        ]);
    }
}
