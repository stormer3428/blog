<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    public function index(Request $request): Response
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
            'contact' => $this->contactRepo->find($id),
        ]);
    }
}
