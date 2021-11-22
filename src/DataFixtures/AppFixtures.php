<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Contact;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $contact = new Contact();
        $contact->setNom('Pastor');
        $contact->setPrenom('Charles');
        $contact->setEmail('charles.pastor@epsi.fr');
        $contact->setMessage("Lorem ipsum sit dolor amet");
        $contact->setSujet("message de test");

        $article = new Article();
        $article->setNom("Le communisme est-il benefique?");
        $article->setContenu("oui");
        $article->setSlug("/articles/communisme");

        $manager->persist($contact);
        $manager->persist($article);

        $manager->flush();
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
