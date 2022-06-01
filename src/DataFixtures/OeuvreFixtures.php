<?php

namespace App\DataFixtures;

use app\Entity\Oeuvre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class OeuvreFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $oeuvre = new Oeuvre();
        $oeuvre->setNom("Lucas");
        $oeuvre->setAuteur("Lucasloop");
        $oeuvre->setCreation("lucascreation");
        // $oeuvre->setCategorie("Animaux");
       
        $manager->persist($oeuvre);
        $manager->flush();
    
    }
}
