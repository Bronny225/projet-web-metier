
<?php

namespace App\DataFixtures;

use App\Entity\Client;
use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Création de clients de test
        $client1 = new Client();
        $client1->setNom('Lologbo');
        $client1->setPrenom('Marc');
        $client1->setEmail('marclologbo@gmail.com');
        $client1->setTelephone('0759176229');
        $manager->persist($client1);

        $client2 = new Client();
        $client2->setNom('Sawadogo');
        $client2->setPrenom('David');
        $client2->setEmail('bronnylogbo@gmail.com');
        $client2->setTelephone('0153708031');
        $manager->persist($client2);

        // Création de produits de test
        $produit1 = new Produit();
        // Ajustez selon les propriétés de votre entité Produit (ex: setNom, setPrix, etc.)
        $produit1->setNom('Produit Test 1');
        $produit1->setPrix(19.99);
        $manager->persist($produit1);

        // Enregistrement en base de données
        $manager->flush();
    }
}