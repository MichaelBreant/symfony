<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\EtudiantFactory;
use App\Factory\FiliereFactory;
use App\Factory\ModuleFactory;
use App\Factory\NoteFactory;
use App\Factory\SemestreFactory;
use App\Factory\UserFactory;
use App\Factory\EnseignantFactory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        FiliereFactory::createMany(10);

        $manager->flush();
    }
}
