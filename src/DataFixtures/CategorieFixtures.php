<?php

namespace App\DataFixtures;

use app\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categorie = new Categorie();
        $categorie->setNom("Animaux");
        $categorie->setDescription("Les animaux de Lyon");
       
       
        $manager->persist($categorie);
        $manager->flush();
    }
}
